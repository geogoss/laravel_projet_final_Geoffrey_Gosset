<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backProduct">Voir tous les produits 👉</a></h1>
    <div class="bg-info py-5">
        <h1 class="text-center text-white">Editer ce Product</h1>

        <form class="w-75 mx-auto text-white" action="/product/{{$product->id}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Name</label>
                <input value="{{$product->name}} " name="name" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">State</label>
                <select name="state" class="custom-select mb-15">
                    <option selected="{{$product->state}}">{{$product->state}} </option>
                    @if ($product->state != 'NEW')
                        <option value="NEW">NEW</option>
                    @endif
                    @if ($product->state != 'SALE')
                        <option value="SALE">SALE</option>
                    @endif
                    @if ($product->state != 'null')
                        <option value="null">null</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="addTreeInputMin" class="form-label">Description</label>
                <textarea name="description" type="text" class="form-control" id="addTreeInputMin"
                    aria-describedby="addTreeInputMinHelp">{{$product->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Price</label>
                <input value="{{$product->price}} " name="price" type="integer" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Discount</label>
                <input value="{{$product->discount}} " name="discount" type="integer" step="0.01" class="form-control" id="exampleInputEmail1"
                    aria-describedby="exampleInputEmail1Help">
            </div>
            
            <label for="addTreeInputUrl" class="form-label">Type</label>
            <select name="type_id" class="custom-select mb-15">
                @foreach ($types as $type)
                <option
                {{ $product->type_id == $type->id ? 'selected' : '' }}
                value="{{ $type->id }} "> {{ $type->name }} </option>
                @endforeach
            </select>

            <label for="addTreeInputUrl" class="form-label">Size</label>
            <select name="size_id" class="custom-select mb-15">
                @foreach ($sizes as $size)
                    <option 
                    {{$product->size_id == $size->id ? 'selected' : '' }} 
                        value="{{ $size->id }}" > {{ $size->name }} </option>
                @endforeach
            </select>

            <p class="mb-3">
                <input type="checkbox" id="newsletter" name="bool" unchecked>
                <label for="newsletter"><span>Star product</span></label>
            </p>

            <div class="mb-3">
                {{-- {{dd($product->image[0]->src)}} --}}
                <input type="file" name="file" >
            </div>

            <div class="mb-3">
                <img src="{{asset('uploads/70x83/'. $product->image[0]->src)}} " alt="">
                <label for="addTreeInputMax" class="form-label">Photo product</label>
                <input value="{{$product->image[0]->src}} " type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

    </div>
</section>
