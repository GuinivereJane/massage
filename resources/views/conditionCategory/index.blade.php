
 @extends('layouts.app')

@section('content')

 
<div>
    <div class="row mb-2">
        <div class="col-sm-3">
            <h4><u>Condition Categories:</u></h4>
        </div>
        <div class="pr-0 col-sm-5">
            <form action="/conditioncategory" method="post">
                @csrf
                <div class="col-sm-12 pr-0">
                <div class="input-group row">
                    <button class="btn btn-secondary" type="submit" >Add new category</button>
                    <input name="category" type="text" class="form-control" id="category">

                </div>
                </div>
                
            </form>
        </div>
    </div>
    @foreach ($conditionCategories as $category)
    <div class="row">
       <div class="col-sm-8">
            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <div class="row justify-content-between mb-0">
                            <div class="col-xs-10">
                                <button class="text-left btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $category->id }}" aria-expanded="true" aria-controls="collapseOne">
                                    <h5>{{$category->name}}</h5>
                                </button>
                            </div>
                            <div class="col-xs-2">
                                <form action="/conditioncategory/{{ $category->id }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    @csrf
                                    <button class="btn btn-secondary" type="submit">X</button>
                                </form>
                            </div>
                        </div>
                        @include('conditionCategory.partials.edit', array('category' => $category))
                    </div>
                </div>
            </div>
       </div> 
    </div>
        
    @endforeach
</div>
  @endsection



  
