$( document ).ready(function() {
        $('body').on('click','.image-zoom',function(){
            $('#imageModal').css('display','block');
           var src = $(this).attr("src");
            $("#forImageZoom").attr("src",src)
        });
        $('body').on('click','.modal__close',function(){
            $('#imageModal').css('display','none');
        })

});
var count =0
function preview_image()
{
    var total_file=document.getElementById("upload_file").files.length;
    if (total_file > 5) {
    	$('#imageAllert').toggle();
    	return false;
    }
    if (count==5) {
    	$('#imageAllert').toggle();
    	return false;
    }
    for(var i=0;i<total_file;i++)
    {
        if (count<6) {
	     	$('#image_preview').append("<img class='image-zoom' src='"+URL.createObjectURL(event.target.files[i])+"'>");
	     	console.log(count)
	    }else{
	    	$('#imageAllert').toggle();
	    }
     	count++

    }

}