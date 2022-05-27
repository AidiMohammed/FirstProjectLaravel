<div class="mb-3">
    <label class="form-label" for="title">Your title</label>
    <input class="form-control" type="text" required name="title" id="title" value="{{old('title',$post->title ?? null)}}">
</div>
<div>
    <label class="form-label" for="content">Content</label>
    <textarea class="form-control" name="content" id="content" rows="5">{{old('content',$post->content ?? null)}}</textarea>
</div>