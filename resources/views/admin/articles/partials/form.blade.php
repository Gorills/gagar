<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $article->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Slug</label>
    <input name="slug" type="text" class="form-control" value="{{ $article->slug ?? "" }}" placeholder="slug" readonly="">
</div>

<select multiple="multiple" name="categories[]" id="" class="form-control">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>



<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание (превью)" name="description">{{ $article->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Полный текст описания</label>
    <textarea class="form-control ckeditor" placeholder="Описание" name="full_description">{{ $article->full_description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 1</label>
    <textarea class="form-control ckeditor" placeholder="Сео текст" name="text_one">{{ $article->text_one ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 2</label>
    <textarea class="form-control ckeditor" placeholder="Сео текст" name="text_two">{{ $article->text_two ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Текст для страницы 3</label>
    <textarea class="form-control ckeditor" placeholder="Сео текст" name="text_three">{{ $article->text_three ?? "" }}</textarea>
</div>


<div class="form-group">
    <label>Мета заголовок</label>
    <input name="meta_title" type="text" class="form-control" value="{{ $article->meta_title ?? "" }}" placeholder="Мета заголовок" required>
</div>
<div class="form-group">
    <label>Мета описание</label>
    <input name="meta_description" type="text" class="form-control" value="{{ $article->meta_description ?? "" }}" placeholder="Мета описание" required>
</div>



<div class="form-group">
    <label>Фото</label>
    <input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
