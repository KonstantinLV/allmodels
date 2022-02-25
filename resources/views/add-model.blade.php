@extends('admin')

@section('section')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="alert alert-warning alert-block" id="imageAllert" style="display:none;">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>Превышен лимит максимального количества загруженных изображений </strong>
</div>
<form id="dataForm" name="dataForm" enctype="multipart/form-data" class="form__block" action="add-model" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Модель:</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <input type="file" class="file-styled" value="{{ old('model_file') }}" name="model_file" accept=".stl,.obj,.fbx,.dae,.3ds,.step,.vrml,.amf,.3mf,.c4d,.bgeo" >
                             @error('model_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Oписание модели :</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('description') }}" name="description" placeholder="" required>
                                 @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Hазвание модели:</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="" required>
                                 @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Технические детали:</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('details') }}" name="details" placeholder="" required>
                                 @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Лицензия :</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <div class="input-group">
                                    <select data-placeholder="Select your state" name="license_id" class="select">
                                        @foreach($licenses as $license)
                                            <option value="{{$license->id}}">{{$license->name}}</option>
                                        @endforeach
                                    </select>

                                 @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Цена модели:</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number"  class="form-control" value="{{ old('price') }}" name="price" placeholder="" required>
                                  @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="heading-form">
                    <div style="padding: 0 20px">
                        <label>Теги модели </label>
                        <textarea rows="4" cols="4" class="form-control" value="{{ old('tags') }}" name="tags" placeholder="" required> </textarea>
                         @error('tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="height: 138px">
            <div class="panel-footer" style="height: 138px">
                <div class="heading-elements">
                    <span class="heading-text text-semibold">Изображение:</span>
                    <div class="heading-form pull-right">
                        <div class="form-group">
                            <input type="file" id="upload_file" value="{{ old('images') }}" name="images[]" class="file-styled" accept="image/*" onchange="preview_image();" multiple required/>
                             @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror    
                        </div>
                    </div>
                </div>
                <div id ='image_preview'>

                </div>
            </div>
        </div>
        <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Загрузить </button>
        </div>

  
</form>

<div id="imageModal" class="modal">
    <div class="modal__container">
        <div class="modal__content modal__image">
            <div class="modal__close"></div>
            <img id="forImageZoom" src="">
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/main.js"></script>
<style>
    #image_preview{
        display: flex;
    }
    #image_preview img{
        height: 80px;
        width: 80px;
        margin-right: 10px;
    }
    #forImageZoom{
        width: 100%;
        margin: 20px auto;
    }
    .modal__image{
        position: relative;
        width: 50%;
        margin: 0 auto;
    }
    .modal__close{
        background-image: url(/assets/images/pnotify/danger.png);
        height: 20px;
        width: 20px;
        background-size: 20px;
        right: -10px;
        position: absolute;
        top: 10px;
        cursor: pointer;
    }
    .image-zoom{
        cursor: pointer;
    }

</style>
@endsection