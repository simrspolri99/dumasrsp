<!-- resources/views/survey/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        .hidden {
            display: none;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #surveyForm {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .hidden {
            display: none;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

   

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('review.store') }}" method="POST" id="surveyForm">
        @csrf
        <h1>REVIEW PELAYANAN <br> RS.POLRI</h1>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <button type="button" id="startSurvey">Mulai Survey</button>

        <!-- Pertanyaan Saranan dan Prasarana -->
        <div class="hidden" id="sarprasQuestion">
            <label for="sarpras">Saranan dan Prasarana:</label><br>
            <select name="sarpras" id="sarpras" required>
                <option value="sangat_baik"> Sangat Baik</option>
                <option value="baik">Baik</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br>
            <button type="button" id="nextQuestion">Next</button>
        </div>

        <!-- Pertanyaan Kecepatan Pelayanan -->
        <div class="hidden" id="kecepatanPelayananQuestion">
            <label for="kecepatanpelayanan">Kecepatan Pelayanan:</label><br>
            <select name="kecepatanpelayanan" id="kecepatanpelayanan" required>
                <option value="sangat_baik"> Sangat Baik</option>
                <option value="baik">Baik</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br>
            <button type="button" id="nextQuestion">Next</button>
        </div>

        <!-- Pertanyaan Administrasi -->
        <div class="hidden" id="administrasiQuestion">
            <label for="administrasi">Administrasi:</label><br>
            <select name="administrasi" id="administrasi" required>
                <option value="sangat_baik"> Sangat Baik</option>
                <option value="baik">Baik</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br>
            <button type="button" id="nextQuestion">Next</button>
        </div>

        <!-- Pertanyaan Pelayanan Tenaga Kesehatan -->
        <div class="hidden" id="pelayananNakesQuestion">
            <label for="pelayanannakes">Pelayanan Tenaga Kesehatan:</label><br>
            <select name="pelayanannakes" id="pelayanannakes" required>
                <option value="sangat_baik"> Sangat Baik</option>
                <option value="baik">Baik</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br>
            <button type="button" id="nextQuestion">Next</button>
        </div>

        <!-- Pertanyaan Pelayanan Rawat Jalan -->
        <div class="hidden" id="layananRajalQuestion">
            <label for="layananrajal">Pelayanan Rawat Jalan:</label><br>
            <select name="layananrajal" id="layananrajal" required>
                <option value="sangat_baik"> Sangat Baik</option>
                <option value="baik">Baik</option>
                <option value="cukup">Cukup</option>
                <option value="kurang">Kurang</option>
            </select><br>
            <button type="button" id="nextQuestion">Next</button>
        </div>

        <!-- Pertanyaan Kritik dan Saran -->
        <div class="hidden" id="kritiksaranQuestion">
            <label for="kritiksaran">Kritik dan Saran:</label><br>
            <textarea id="kritiksaran" name="kritiksaran" required></textarea><br>
            <button type="submit">Submit</button>
        </div>
    </form>

    <script>
        document.getElementById('startSurvey').addEventListener('click', function() {
            document.getElementById('startSurvey').style.display = 'none';
            document.getElementById('sarprasQuestion').classList.remove('hidden');
        });

        document.querySelectorAll('#nextQuestion').forEach(button => {
            button.addEventListener('click', function() {
                const currentQuestion = this.parentElement;
                const nextQuestion = currentQuestion.nextElementSibling;

                currentQuestion.classList.add('hidden');
                if (nextQuestion) {
                    nextQuestion.classList.remove('hidden');
                } else {
                    document.getElementById('surveyForm').submit();
                }
            });
        });
    </script>
</body>
</html>
