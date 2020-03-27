

function show(id){
    $.ajax({
        "url" : BASE_URL + "/comments/"+id+"/reply",
        method: "get",
        type:'json',
        success: function(data){
            showForm(data);
        },
        error: function(error,xhr){
            console.log("Error showing form");
            console.log(xhr.status);

        }

    });
}


function showForm(data){
    var form="";
     form+=`
    <h3 class="mb-5">Reply to user</h3>
    
        
        <div class="form-group">
            <label for="message">Type your reply here</label>
            <textarea  id="reply" name="reply" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Post Reply" onclick="addReply(${data.id})" class="btn py-3 px-4 btn-primary">
        </div>

</div>

`;
     $("#komentar").html(form);

}


function addReply(id){
    var replyData=$("#reply").val();
    $.ajax({
        "url": BASE_URL+"/comments/" + id + "/add-reply",
        method: "post",
        data: {
            'reply' : replyData,
            '_method' : "post",
            '_token' : TOKEN
        },
        type:'json',
        success:function(data){
            console.log("Reply added");
            hideForm(id, replyData);

        },
        error: function(error){
            console.log("Error while replying");
        }
    });
}

function hideForm(id, replyData){
    $("#komentar"+id).html(replyData);
    $("#komentar").html("<div class='alert alert-info'>Reply added successfully!</div>");
    $("#rep").hide();
}



<!-- IZMENA KOMENTARA -->



function editForm(id){
    $.ajax({
        "url" : BASE_URL + "/comments/"+id+"/form",
        method: "get",
        type:'json',
        success: function(data){
            form(data);
        },
        error: function(error,xhr){
            console.log("Error showing form");
            console.log(xhr.status);

        }

    });
}

function form(data) {
    var html = "";
    html += `
    <h3 class="mb-5">Edit your comment</h3>
    
        
        <div class="form-group">
            <label for="message">Type your reply here</label>
            <textarea  id="content" name="content" cols="30" rows="10" class="form-control">${data.content}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Update comment" onclick="updateComment(${data.id})" class="btn py-3 px-4 btn-primary">
        </div>

</div>

`;
    $("#komentar").html(html);

}

function updateComment(id) {
    var editedData = $("#content").val();
    $.ajax({
        "url" : BASE_URL + "/comments/" + id + "/update-com",
        method : "post",
        data : {
            'content' : editedData,
            '_method' : "post",
            '_token' : TOKEN
        },
        type : 'json',
        success : function(data) {
            hide(id, editedData);
        },
        error : function(error)
        {
            console.log("Something went wrong"+error);
        }
    });
}

function hide(id, editedData)
{
    $("#comment"+id).html(editedData);
    $("#komentar").html("<div class='alert alert-info'>Comment editedsuccessfully!</div>");

}



