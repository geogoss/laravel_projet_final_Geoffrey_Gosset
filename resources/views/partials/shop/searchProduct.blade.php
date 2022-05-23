
<form action="/search" method="GET">
    <input type="text" placeholder="Search here..." name="q" />
    <button type="submit" class="fa fa-search" aria-hidden="true">
        <i class="zmdi zmdi-search"></i>
    </button>
</form>
<table class="table table-striped table-success">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
          <th scope="row">{{product->id}} </th>
          <td>{{product->name}}</td>
          <td>{{product->price}}</td>
        </tr>
            
        @endforeach
   
    </tbody>
  </table>