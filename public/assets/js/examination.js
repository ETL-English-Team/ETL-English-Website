function reloadData(html_post, html_get, path){
    $(document).ready(function(){
        var answer = html_post.val();
        $.get(path+answer,function(data){
            html_get.html(data);
        });
    });
}

function sendAnswer(){
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
}

function nextQuestion(){
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
    reloadData( $('#answer') , $('.modal-body') , 'ajax/check-answer/' );
}