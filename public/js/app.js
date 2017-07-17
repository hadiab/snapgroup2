$(document).ready(function() {
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
var postId = {};
var postBody = {};
var postBodyElement = {};
$('.edit').click(function(e){  
    e.preventDefault();

    postBodyElement.text = e.target.parentNode.parentNode.childNodes[1];
    postBody.content = postBodyElement.text.textContent;
    postId.number = e.target.parentNode.parentNode.dataset['postid'];

    $('#post-body').val(postBody.content);
    $('#myModal').modal('show'); 
});

    $('#modal-save').on('click', function(e) {
        $.ajax({
            method: 'POST',
            url: url,
            data: { body :$('#post-body').val(), postId: postId.number, _token: token }
        })
        .done(function(response) { 
            $(postBodyElement.text).text(response['new_body']);
            $('#myModal').modal('hide'); 
        });
        });
    })