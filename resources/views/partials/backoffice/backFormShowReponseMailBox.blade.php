<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backMailBox">Voir tous les mails
            👉</a></h1>
    <div class="bg-success py-5">
        <h1 class="text-center text-white">Répondre à l'email</h1>

        <form class="w-75 mx-auto text-white" action="/message" method="POST" >
            @csrf

            <input type="text" name="email" value="geoffreygosset123@gmail.com" hidden>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Message</label>
                <textarea class="custom-textarea" name="message" placeholder="Your message here..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Répondre</button>
        </form>

    </div>
</section>
