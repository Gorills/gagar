<div class="form-group">
    <label>Имя</label>
    <input name="title" type="text" class="form-control" value="{{ $work->title ?? "" }}" placeholder="ФИО" required>
</div>



<div class="form-group">
    <label>Дата отзыва</label>
    <input class="form-control" placeholder="Дата: 25.10.2019" name="description">{{ $work->description ?? "" }}
</div>

<div class="form-group">
    <label>Ссылка на отзыв</label>
    <input class="form-control" placeholder="URL" name="url">{{ $work->url ?? "" }}
</div>

<div class="form-group">
    <label>Текст отзыва</label>
    <textarea class="form-control" placeholder="Текст отзыва" name="full_description">{{ $work->full_description ?? "" }}</textarea>
</div>



<div class="text-right">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>
