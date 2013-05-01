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

function addToWishlist(book_id)
{
	jQuery.ajax({
	url:'index.php?option=com_lendr&controller=wish&format=raw&tmpl=component',
	type:'POST',
	data:'&book_id='+book_id,
	dataType:'JSON',
	success:function(data)
	{
		if ( data.success ){
			console.log(data.html);
			jQuery("#messageModal").modal('show');
			jQuery("#message").html(data.html);
		}
	}
	});
}

function loadLendModal(book_id, borrower_id, borrower, waitlist_id)
{
	jQuery("#lendBookModal").modal('show');
	jQuery('#borrower_name').html(borrower);
	jQuery("#book_id").val(book_id);
	jQuery("#borrower_id").val(borrower_id);
	jQuery("#waitlist_id").val(waitlist_id);
}

//add a review
function addReview()
{
	var reviewInfo = {};
	jQuery("#reviewForm :input").each(function(idx,ele){
		reviewInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:reviewInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success ){
				console.log(data.html);
				jQuery("#review-list").append(data.html);
				jQuery("#newReviewModal").modal('hide');
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

function lendBook()
{
	var lendForm = {};
	jQuery("#lendForm :input").each(function(idx,ele){
		lendForm[jQuery(ele).attr('name')] = jQuery(ele).val();
	});
	
	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=lend&format=raw&tmpl=component',
		type:'POST',
		data:lendForm,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success )
			{
				jQuery("#lendBookModal").modal('hide');
			}
		}
	});
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

function lendBookModal(book_id,borrower)
{
	alert(borrower);
	jQuery("#lendBookModal").modal('show');
	jQuery("#bookid").val(book_id);
	jQuery("#borrower_name").html(borrower);	
}

function returnBookModal(book_id)
{
	jQuery("#returnBookModal").modal('show');
	jQuery("#book_id").val(book_id);
}

function returnBook()
{
	var postInfo = {};
	jQuery("#returnForm :input").each(function(idx,ele){
		postInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=lend&format=raw&tmpl=component',
		type:'POST',
		data: postInfo,
		dataType: 'JSON',
		success:function(data)
		{
			if(data.success)
			{
				jQuery("#returnBookModal").modal('hide');
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
		data: 'waitlist_id='+waitlist_id,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
		}
	});
}

function deleteBook(book_id,type) 
{
	jQuery.ajax({
		url:'index.php?option=com_lendr&controller=delete&format=raw&tmpl=component',
		type:'POST',
		data: 'book_id='+book_id+'&type='+type,
		dataType: 'JSON',
		success:function(data)
		{
			alert(data.msg);
			if(data.success)
			{
				jQuery("tr#bookRow"+book_id).hide();
			}
		}
	});
}