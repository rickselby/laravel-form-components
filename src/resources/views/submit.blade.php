
<div class="form-group row">
    <div class="col-md-10 offset-md-2">
        {{
            html()
                ->submit($slot)
                ->class('btn btn-primary')
        }}
    </div>
</div>
