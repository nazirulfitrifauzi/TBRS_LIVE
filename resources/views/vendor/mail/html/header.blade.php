<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ secure_asset('public/img') }}/logo_tekun.png" class="logo">
@else
{{-- {{ $slot }} --}}
<img src="{{ secure_asset('public/img') }}/logo_tekun.png" class="logo">
@endif
</a>
</td>
</tr>
