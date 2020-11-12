<div class="form-group">
    <label>Название</label>
    <input name="title" type="text" class="form-control" value="{{ $stock->title ?? "" }}" placeholder="Заголовок" required>
</div>

<div class="form-group">
    <label>Slug</label>
    <input name="slug" type="text" class="form-control" value="{{ $stock->slug ?? "" }}" placeholder="slug" readonly="">
</div>

<div class="form-group">
    <label>Описание</label>
    <textarea class="form-control" placeholder="Описание" name="description">{{ $stock->description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Полный текст новости</label>
    <textarea class="form-control ckeditor" placeholder="Полный текст новости" name="full_description">{{ $stock->full_description ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Метка</label>
    <input name="type" type="text" class="form-control" value="{{ $stock->type ?? "" }}" placeholder="Метка" required>
</div>

<div class="form-group">
    <label>Цвет #3b3f4a</label>
    <input name="color" type="text" class="form-control" value="{{ $stock->color ?? "" }}" placeholder="#3b3f4a" required>
</div>



<div class="form-group">
    <label>Мета заголовок</label>
    <textarea class="form-control" placeholder="Мета заголовок" name="meta_title">{{ $stock->meta_title ?? "" }}</textarea>
</div>

<div class="form-group">
    <label>Мета описание</label>
    <textarea class="form-control" placeholder="Мета описание" name="meta_description">{{ $stock->meta_description ?? "" }}</textarea>
</div>

<div class="form-group">
<label>Фото</label>
<input class="form-control btn" type="file" name="image" required>
</div>

<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
