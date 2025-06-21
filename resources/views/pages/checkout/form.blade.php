<x-layout>
    <section id="checkuoutSection">
        <div class="container">
            <x-heading pageName="Podaci za iznajmljivanje" />

            <div class="d-flex flex-column justify-content-center align-items-center">

                <form action="{{ route('checkout.submit') }}" method="POST" class="col-md-7 mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Ime i prezime</label>
                        <input type="text" name="name" id="name" class="form-control" required />
                    </div>
                
                    <div class="mb-3">
                        <label for="email" class="form-label">Email adresa</label>
                        <input type="email" name="email" id="email" class="form-control" required />
                    </div>
                
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon</label>
                        <input type="text" name="phone" id="phone" class="form-control" />
                    </div>
    
                    <div class="mb-3">
                        <label for="company" class="form-label">Naziv kompanije</label>
                        <input type="text" name="company" id="company" class="form-control" required />
                    </div>
    
                    <div class="mb-3">
                        <label for="project_name" class="form-label">Naziv projekta</label>
                        <input type="text" name="project_name" id="project_name" class="form-control" required />
                    </div>
    
                    <div class="mb-3">
                        <label for="project_start" class="form-label">Datum početka projekta</label>
                        <input type="date" name="project_start" id="project_start" class="form-control" min="{{ date('Y-m-d') }}" required />
                    </div>
    
                    <div class="mb-3">
                        <label for="project_end" class="form-label">Datum završetka projekta</label>
                        <input type="date" name="project_end" id="project_end" class="form-control" min="{{ date('Y-m-d') }}" required />
                    </div>
                
                    <div class="mb-3">
                        <label for="note" class="form-label">Napomena</label>
                        <textarea name="note" id="note" class="form-control"></textarea>
                    </div>

                    <div class="col-md-7 mb-3">
                        {!! NoCaptcha::display() !!}
                    </div>
                
                    <div class="text-end mt-5">
                        <button type="submit" class="btn beostud-btn white">Pošalji</button>
                    </div>

                    {!! NoCaptcha::renderJs() !!}
                </form>
            </div>
        </div>

    </section>
</x-layout>
