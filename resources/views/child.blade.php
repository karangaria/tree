<ul>
@foreach($childs as $child)
	<li>
	    {{ $child->test->name }}
	@if(count($child->childs))
            @include('child',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>