<tr>
	<td class="header">
		<a href="{{ $url }}" style="display: inline-block;">
			@if (trim($slot) === 'Laravel')
			<img src="img/logo.png" class="logo" alt="E-Complain dan Review RS.POLRI SAID SUKANTO">
			@else
			{{ $slot }}
			@endif
		</a>
	</td>
</tr>
