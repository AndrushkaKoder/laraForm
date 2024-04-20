<div class="container">
	<div class="row my-5">
		<div class="col-12 text-center my-3">
			<h1>Тестовая форма</h1>
		</div>
		@if($fields)
			<div class="col-xl-4 col-md-8 col-sm-12 m-auto">
				@include('form.form', ['fields' => $fields])
			</div>
		@else
			<div class="col-12">
				<h2 class="text-center">Что-то пошло не так =(</h2>
				<p>Проверьте .env файл: <span class="fw-bold">Доступные значения</span></p>
				<ul>
					@foreach(\App\Services\Enums\FormTranslateEnum::cases() as $case)
						<li><span class="fw-bold">FORM_TRANSLATE</span>={{ $case->value }}</li>
					@endforeach
				</ul>
				<p>Так же проверьте конфигурационные файлы</p>
			</div>
		@endif
	</div>
</div>
