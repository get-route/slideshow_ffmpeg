@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{route('index')}}/Frontend/img/favicons/mstile-150x150.png" class="logo" alt="Логотип сайта">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
