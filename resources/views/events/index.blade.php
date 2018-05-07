<ul>
	@foreach($events as $event)
		<li>
			{{ $event }}
			@if (strpos($event, 'Laravel') !==false)
				(sweet framework!)
			@elseif(strpos($event, 'Raspberry') !==false)
				(Love me some Raspbery Pi!)
			@else
				(don't know much about this one!)
			@endif
		</li>
  @endforeach
</ul>