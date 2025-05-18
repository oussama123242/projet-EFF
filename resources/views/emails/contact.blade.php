@extends('layouts.client')

@section('title', 'Contactez-nous')

@section('content')
    <style>
        .contact-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-container h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #2d3436;
            font-weight: 600;
        }

        .contact-description {
            color: #636e72;
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #2d3436;
            font-size: 0.95rem;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 1rem;
            color: #2d3436;
            background-color: #fff;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #c8b53e;
            outline: none;
            box-shadow: 0 0 0 4px rgba(200, 181, 62, 0.1);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn-submit {
            background-color: #c8b53e;
            border: none;
            color: white;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s ease;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-submit:hover {
            background-color: #b3a136;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(200, 181, 62, 0.3);
        }

        .alert-success {
            background-color: #dff9e3;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            color: #1e8449;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .alert-success:before {
            content: '✓';
            font-size: 1.2rem;
            font-weight: bold;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .invalid-feedback:before {
            content: '!';
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            background-color: #e74c3c;
            color: white;
            border-radius: 50%;
            font-size: 12px;
            font-weight: bold;
        }

        .required-field:after {
            content: ' *';
            color: #e74c3c;
        }

        @media (max-width: 768px) {
            .contact-section {
                padding: 40px 20px;
            }

            .contact-container {
                padding: 30px 20px;
            }

            .contact-container h1 {
                font-size: 2rem;
            }

            .contact-description {
                font-size: 1rem;
            }
        }

        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    </style>

    <div class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h1>Contactez-nous</h1>
                <p class="contact-description">
                    Nous sommes là pour vous aider. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.
                </p>
            </div>

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="nom" class="required-field">Nom complet</label>
                    <input type="text" id="nom" class="@error('nom') is-invalid @enderror" name="nom"
                        value="{{ old('nom') }}" required placeholder="Votre nom complet">
                    @error('nom') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="required-field">Adresse e-mail</label>
                    <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required placeholder="votre@email.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" id="telephone" class="@error('telephone') is-invalid @enderror" name="telephone"
                        value="{{ old('telephone') }}" placeholder="Votre numéro de téléphone">
                    @error('telephone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="sujet" class="required-field">Sujet</label>
                    <select id="sujet" class="@error('sujet') is-invalid @enderror" name="sujet" required>
                        <option value="">Sélectionnez un sujet</option>
                        <option value="Demande" {{ old('sujet') == 'Demande' ? 'selected' : '' }}>Demande d'information</option>
                        <option value="Réclamation" {{ old('sujet') == 'Réclamation' ? 'selected' : '' }}>Réclamation</option>
                        <option value="Autre" {{ old('sujet') == 'Autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    @error('sujet') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="message" class="required-field">Message</label>
                    <textarea id="message" class="@error('message') is-invalid @enderror" name="message"
                        required placeholder="Votre message...">{{ old('message') }}</textarea>
                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn-submit">Envoyer le message</button>
            </form>
        </div>
    </div>
@endsection