document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.rental-item-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            const action = form.getAttribute('action');

            fetch(action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData,
                credentials: 'same-origin'
            })
            .then(res => {
                if (!res.ok) {
                    throw new Error('Neuspešan odgovor sa servera');
                }
                return res.json();
            })
            .then(data => {
                if (data.success) {
                    // ✅ Ažuriraj broj u korpi
                    const badge = document.querySelector('.cart-number-value');
                    if (badge) {
                        badge.innerText = data.cart_count;
                    }

                    // ✅ Prikaži alert poruku
                    const alertBox = document.getElementById('cart-alert');
                    if (alertBox) {
                        alertBox.innerText = "Proizvod dodat u korpu!";
                        alertBox.style.display = 'block';
                        setTimeout(() => alertBox.style.display = 'none', 3000);
                    }
                }
            })
            .catch(err => {
                console.error('Greška prilikom dodavanja u korpu:', err);
            });
        });
    });

    // 🧹 Brisanje item-a iz korpe
    document.querySelectorAll('.cart-remove-form')?.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            const action = form.getAttribute('action');

            fetch(action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData,
                credentials: 'same-origin'
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    const badge = document.querySelector('.cart-number-value');
                    if (badge) {
                        badge.innerText = data.cart_count;
                    }

                    // Ukloni karticu iz DOM-a
                    const itemDiv = form.closest('.cart-item');
                    if (itemDiv) {
                        itemDiv.remove();
                    }

                    // Ako više nema item-a, prikaži poruku
                    if (document.querySelectorAll('.cart-item').length === 0) {
                        const container = document.querySelector('#rentalSection .container');
                        container.innerHTML = '<p class="text-muted">Vaša korpa je prazna.</p>';
                    }
                }
            })
            .catch(err => {
                console.error('Greška prilikom uklanjanja iz korpe:', err);
            });
        });
    });
    
});


