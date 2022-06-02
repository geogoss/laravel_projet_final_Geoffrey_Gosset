<div class="w-100">
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $mailbox->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $mailbox->email }}</h6>
            <p class="card-text">{{ $mailbox->content }}</p>
            <div class="d-flex justify-around">
                <form action="/mailbox/{{ $mailbox->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                </form>
                <button class="btn btn-success">
                    @csrf
                    <a class="text-decoration-none text-white" href="/backMailBox">MailBox</a>
                </button>
            </div>
        </div>
    </div>
</div>
