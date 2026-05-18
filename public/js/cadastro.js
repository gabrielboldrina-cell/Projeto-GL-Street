$(document).ready(function () {
    $("#btnCadastro").click( function () {
        $(".bntCadastro").hide();

        Swal.fire({
            title: "Cadastro realizado!",
            text: "Bem-vindo(a) ao GL Street.",
            icon: "success",
            background: "#121212",
            color: "#f5f5f5",
            confirmButtonColor: "#dc3545"
        });
    });
});

    function togglePass(id, btn) {
            const input = document.getElementById(id);
            const isText = input.type === 'text';
            input.type = isText ? 'password' : 'text';

            const eyeOpen = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>`;
            const eyeOff  = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>`;

            btn.innerHTML = isText ? eyeOpen : eyeOff;
        }

        /* ── CPF MASK ── */
        document.getElementById('cpf').addEventListener('input', function () {
            let v = this.value.replace(/\D/g, '').slice(0, 11);
            if (v.length > 9) v = v.replace(/^(\d{3})(\d{3})(\d{3})(\d{0,2})/, '$1.$2.$3-$4');
            else if (v.length > 6) v = v.replace(/^(\d{3})(\d{3})(\d{0,3})/, '$1.$2.$3');
            else if (v.length > 3) v = v.replace(/^(\d{3})(\d{0,3})/, '$1.$2');
            this.value = v;
        });

        /* ── PHONE MASK ── */
        document.getElementById('telefone').addEventListener('input', function () {
            let v = this.value.replace(/\D/g, '').slice(0, 11);
            if (v.length > 6) v = v.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
            else if (v.length > 2) v = v.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            else if (v.length > 0) v = v.replace(/^(\d{0,2})/, '($1');
            this.value = v;
        });

        /* ── PASSWORD STRENGTH ── */
        document.getElementById('senha').addEventListener('input', function () {
            const val = this.value;
            const segs = [document.getElementById('seg1'), document.getElementById('seg2'),
                          document.getElementById('seg3'), document.getElementById('seg4')];
            const hint = document.getElementById('strengthHint');

            segs.forEach(s => { s.className = 'strength-seg'; });

            if (!val) { hint.textContent = ''; return; }

            let score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            const cls = score <= 1 ? 'active-weak' : score === 2 ? 'active-fair' : 'active-strong';
            const labels = ['', 'Fraca', 'Fraca', 'Razoável', 'Forte'];
            const colors = ['', '#e53935', '#e53935', '#fb8c00', '#6ce2a8'];

            for (let i = 0; i < score; i++) segs[i].classList.add(cls);
            hint.textContent = labels[score];
            hint.style.color = colors[score];
        });

        /* ── SUBMIT ── */
        document.getElementById('btnCadastro').addEventListener('click', function () {
            const nome   = document.getElementById('nomeCompleto').value.trim();
            const email  = document.getElementById('email').value.trim();
            const user   = document.getElementById('usuario').value.trim();
            const tel    = document.getElementById('telefone').value.trim();
            const cpf    = document.getElementById('cpf').value.trim();
            const senha  = document.getElementById('senha').value;
            const conf   = document.getElementById('confirmarSenha').value;
            const termos = document.getElementById('termos').checked;

            if (!nome || !email || !user || !tel || !cpf || !senha || !conf) {
                Swal.fire({
                    title: 'Campos obrigatórios',
                    text: 'Preencha todos os campos antes de continuar.',
                    icon: 'warning',
                    confirmButtonColor: '#bf1e2d'
                });
                return;
            }

            if (senha !== conf) {
                Swal.fire({
                    title: 'Senhas diferentes',
                    text: 'A senha e a confirmação precisam ser iguais.',
                    icon: 'error',
                    confirmButtonColor: '#bf1e2d'
                });
                return;
            }

            if (!termos) {
                Swal.fire({
                    title: 'Aceite os termos',
                    text: 'Você precisa aceitar os Termos de Uso para criar uma conta.',
                    icon: 'warning',
                    confirmButtonColor: '#bf1e2d'
                });
                return;
            }

            Swal.fire({
                title: 'Conta criada!',
                html: `Bem-vindo(a) à GL Street, <strong>${nome.split(' ')[0]}</strong>.<br>Seu estilo chegou ao nível seguinte.`,
                icon: 'success',
                confirmButtonColor: '#bf1e2d',
                confirmButtonText: 'Explorar catálogo'
            }).then(result => {
                if (result.isConfirmed) window.location.href = 'home.html';
            });
        });