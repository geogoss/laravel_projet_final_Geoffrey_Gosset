<section class="mb-5">
    <h2 class=" text-center m-5"> MailBox</h2>
    <div class="w-75 mx-auto">
      <table class="table  table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Message</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($emails as $item)
            <tr class="{{$item->bool == true ? 'table-danger' : ''}} " >
              <th scope="row">{{$item->id}} </th>
              <td>{{$item->name}} </td>
              <td>{{$item->email}} </td>
              <td>{{substr($item->content, 0, 25)}} </td>
              <td>
                <div class="d-flex justify-content-center text-center mx-3 mb-5">
                    <button class="btn btn-success">
                        @csrf
                        <a class="text-decoration-none text-white" href="/mailbox/{{ $item->id }} ">Lire</a>
                    </button>
                    <form action="/mailbox/{{ $item->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                  </form>
                  <button class="btn btn-success">
                    @csrf
                    <a class="text-decoration-none text-white" href="/show/{{ $item->id }} ">Répondre</a>
                </button>

          
              </div>
          
              </td>
            </tr>
                
            @endforeach
          </tbody>
        </table>
  </div>
  
  </section>
