
    <h3>Заявка с сайта:</h3>

@if($data['name'])
    <p>Имя: {{ $data['name'] }}</p>
@else

@endif

<p>Телефон: {{ $data['tel'] }}</p>




@if($data['page'])
    <p>Заявка со страницы: {{ $data['page'] }}</p>
@else

@endif
