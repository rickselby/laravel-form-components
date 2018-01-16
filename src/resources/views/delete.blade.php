
<h2 class="mb-3">{{ $heading }}</h2>

{{ html()->form('DELETE', $deleteRoute)->open() }}

<div class="btn-group" role="group">
    {{ html()->submit($button)->class('btn btn-danger') }}

    <a href="{{ $returnRoute }}" class="btn btn-info">
        {{ $return }}
    </a>
</div>

{{ html()->form()->close() }}
