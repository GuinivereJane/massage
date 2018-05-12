<div id="{{ $category->id }}" class="m-4 collapse" aria-labelledby="headingOne" data-parent="#accordion">
    @foreach ($category->conditions as $condition)
        <div class="pb-2">
            <form action="conditioncategory/{{ $category->id }}/condition/{{ $condition->id }}" method="post">
                <input type="hidden" name="_method" value="delete">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-xs-10"><h5>{{ $condition->name }}</h5></div>
                    <div class="col-xs-2">
                        <button class="btn" type="submit">X</button>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
    <form action="conditioncategory/{{ $category->id }}/condition" method="post">
        @csrf
        <div style="width:auto;" class="input-group row">
            <input name="condition" type="text" class=" form-control" id="condition">
            <button class="btn btn-secondary" type="submit" >Add new condition</button>
        </div>
    </form>
</div>


      