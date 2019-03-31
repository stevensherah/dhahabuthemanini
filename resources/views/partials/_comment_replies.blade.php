@foreach($comments as $comment)
<div class="card row">
        <div class="col-md-2">
                <img src="assets/img/avatar.jpg" alt="Thumbnail Image" style="max-height:30px" class="img-circle img-raised img-responsive">
        </div>

    <div class="col-md-10">
        <strong> {{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
</div>
@endforeach