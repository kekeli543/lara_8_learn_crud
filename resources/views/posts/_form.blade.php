<label for="title">標題</label>
<input type="text" name="title" value="@isset($post) {{ $post->title }} @endisset">

<label for="content">內容</label>
<textarea name="content" rows="4" cols="50">
@isset($post) {{ $post->content }} @endisset
</textarea>

<label for="status">狀態</label>
<select name="status">
    <option>請選擇狀態</option>
    <option value="draft">草稿</option>
    <option value="published">上架</option>
</select>

<input type="submit" class="btn btn-primary" value="送出">