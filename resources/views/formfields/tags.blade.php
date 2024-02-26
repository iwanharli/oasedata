<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

<input 
	class="form-control"
	name="{{ $row->field }}" 
	data-name="{{ $row->display_name }}" 
	value="
	@if(isset($dataTypeContent->{$row->field}))
		{{ old($row->field, $dataTypeContent->{$row->field}) }}
	@else
		{{old($row->field)}}
	@endif
	"
	@if($row->required == 1) required @endif 
>

<script>
	// The DOM element you wish to replace with Tagify
	var input = document.querySelector('input[name=tags]');

	// initialize Tagify on the above input node reference
	new Tagify(input)
</script>