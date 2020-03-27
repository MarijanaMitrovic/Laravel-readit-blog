


<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Reply to user</h3>
    <form action="" method="post" class="p-5 bg-light">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="message">Type your reply here</label>
            <textarea  id="" name="reply" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Post Reply" class="btn py-3 px-4 btn-primary">
        </div>

    </form>
</div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif
@if(session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif