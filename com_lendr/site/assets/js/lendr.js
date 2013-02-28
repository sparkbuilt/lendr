jQuery(document).ready(function(){

});

//add a book
function addBook()
{
	var bookInfo = {};
	jQuery("#bookForm :input").each(function(idx,ele){
		bookInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:bookInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success ){
				jQuery("#book-list").append(data.html);
				jQuery("#newBookModal").modal('hide');
			}else{

			}
		}
	});

}

function borrowBookModal(book_id)
{
	jQuery("#borrowBookModal").modal('show');
	var html = jQuery("#book-row-"+book_id).html();
	jQuery("#book-modal-info").html(html);
	jQuery("#book-id").val(book_id);
}

function borrowBook()
{
	var requestInfo = {};
	jQuery("#borrowForm :input").each(function(idx,ele){
		requestInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=request&format=raw&tmpl=component',
		type:'POST',
		data:requestInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success )
			{
				jQuery("#borrowBookModal").modal('hide');
			} else {

			}
		}
	});
}

function cancelRequest(waitlist_id) 
{
	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=delete&format=raw&tmpl=component',
		type:'POST',
		data: 'waitlist_id = '+waitlist_id,
		dataType: 'JSON',
		success:function(data)
		{
			if(data.success)
			{
			
			} else {

			}
		}
	});
}