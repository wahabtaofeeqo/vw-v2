<footer class="bg-dark py-4">
	<div class="py-5">
       <div class="container text-center text-white">
            <h4>Receive our Newsletter</h4>
            <p>Sign up to receive updates and announcements</p>
            <form method="POST" action="/api/newsletter" class="col-md-10 mx-auto ajaxForm">
                <div class="form-row justify-content-center">
                    <input type="email" name="email" placeholder="Email" class="form-control col-8">
                    <button class="btn btn-danger col-2">Subscribe</button>
                </div>
            </form>
       </div>
    </div>

	<div class="container text-center text-white font-weight-bold">
		&copy; TheValidWallets {{date('Y')}}. Alright reserved
	</div>
</footer>