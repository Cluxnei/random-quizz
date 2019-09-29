<?php

use App\Answer;
use App\Category;
use App\Question;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class QuestionsTableSeeder extends Seeder
{
    private function createAnswer($title, $description = '', $one = true, $titles)
    {
        $fatec = Category::where('name', 'Fatec&CPS')->first()->id;
        $logica = Category::where('name', 'Lógica')->first()->id;
        $now = Carbon::now();
        // Itinerator part
        $question = Question::create([
            'title' => $title,
            'description' => $description
        ]);
        $question_id = $question->id;
        $question->categories()->sync([$one ? $fatec : $logica]);
        Answer::insert([
            [
                'title' => $titles[0]->title,
                'correct' => $titles[0]->correct,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => $titles[1]->title,
                'correct' => $titles[1]->correct,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => $titles[2]->title,
                'correct' => $titles[2]->correct,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => $titles[3]->title,
                'correct' => $titles[3]->correct,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => $titles[4]->title,
                'correct' => $titles[4]->correct,
                'created_at' => $now,
                'question_id' => $question_id
            ],
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Em que ano o Centro Paula Souza foi criado?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '1900',
                'correct' => 0
            ],
            (object)[
                'title' => '2010',
                'correct' => 0
            ],
            (object)[
                'title' => '1950',
                'correct' => 0
            ],
            (object)[
                'title' => '1969',
                'correct' => 1
            ],
            (object)[
                'title' => '1980',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Em qual cidade fica a primeira FATEC a funcionar no Centro Paula Souza?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Manaus',
                'correct' => 0
            ],
            (object)[
                'title' => 'Sorocaba',
                'correct' => 1
            ],
            (object)[
                'title' => 'Salvador',
                'correct' => 0
            ],
            (object)[
                'title' => 'Brasília',
                'correct' => 0
            ],
            (object)[
                'title' => 'Recife',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Em que ano começou a funcionar o primeiro curso da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '1906',
                'correct' => 0
            ],
            (object)[
                'title' => '1889',
                'correct' => 0
            ],
            (object)[
                'title' => '1970',
                'correct' => 1
            ],
            (object)[
                'title' => '1999',
                'correct' => 0
            ],
            (object)[
                'title' => '2015',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Em que ano começou a funcionar o primeiro curso na área de Informática da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '2005',
                'correct' => 0
            ],
            (object)[
                'title' => '1901',
                'correct' => 0
            ],
            (object)[
                'title' => '1986',
                'correct' => 1
            ],
            (object)[
                'title' => '2010',
                'correct' => 0
            ],
            (object)[
                'title' => '2000',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Como é o nome do personagem histórico que dá nome oficial à FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Getúlio Vargas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Sílvio Santos',
                'correct' => 0
            ],
            (object)[
                'title' => 'João da Silva',
                'correct' => 0
            ],
            (object)[
                'title' => 'José Crespo Gonzales',
                'correct' => 1
            ],
            (object)[
                'title' => 'Tobias de Aguiar',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'O que significa a sigla ADS utilizada para o curso de Tecnologia em Informática da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Auditoria e Desenvolvimento de Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Aplicativos, Desktop e Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Automação, Drones e Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Análise Deliberada de Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantos semestres tem o curso de Tecnologia em Análise e Desenvolvimento de Sistemas do período diurno da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '06',
                'correct' => 1
            ],
            (object)[
                'title' => '12',
                'correct' => 0
            ],
            (object)[
                'title' => '10',
                'correct' => 0
            ],
            (object)[
                'title' => '08',
                'correct' => 0
            ],
            (object)[
                'title' => '15',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantos semestres tem o curso de Tecnologia em Análise e Desenvolvimento de Sistemas do período noturno da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '06',
                'correct' => 0
            ],
            (object)[
                'title' => '12',
                'correct' => 0
            ],
            (object)[
                'title' => '10',
                'correct' => 0
            ],
            (object)[
                'title' => '08',
                'correct' => 1
            ],
            (object)[
                'title' => '15',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual o nome do curso que antecedeu o atual curso de Tecnologia em Análise e Desenvolvimento de Sistemas da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Processos de Produção',
                'correct' => 0
            ],
            (object)[
                'title' => 'Processamento de Dados',
                'correct' => 1
            ],
            (object)[
                'title' => 'Pesquisa e Desenvolvimento',
                'correct' => 0
            ],
            (object)[
                'title' => 'Prendas Domésticas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Programação e Desenvolvimento',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantas vagas são oferecidas a cada vestibular para o curso de Tecnologia em Análise e Desenvolvimento de Sistemas noturno?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '50',
                'correct' => 0
            ],
            (object)[
                'title' => '40',
                'correct' => 1
            ],
            (object)[
                'title' => '30',
                'correct' => 0
            ],
            (object)[
                'title' => '20',
                'correct' => 0
            ],
            (object)[
                'title' => '10',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos cursos indicados a seguir não é oferecido na FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Direito',
                'correct' => 1
            ],
            (object)[
                'title' => 'Fabricação Mecânica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Mecânica Automotiva',
                'correct' => 0
            ],
            (object)[
                'title' => 'Projetos Mecânicos',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos cursos indicados a seguir não é oferecido na FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Polímeros',
                'correct' => 0
            ],
            (object)[
                'title' => 'Corte e Costura',
                'correct' => 1
            ],
            (object)[
                'title' => 'Manufatura Avançada',
                'correct' => 0
            ],
            (object)[
                'title' => 'Logística',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos cursos indicados a seguir não é oferecido na FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Enfermagem',
                'correct' => 1
            ],
            (object)[
                'title' => 'Manufatura Avançada',
                'correct' => 0
            ],
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 0
            ],
            (object)[
                'title' => 'Fabricação Mecânica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Sistemas Biomédicos',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos cursos indicados a seguir não é oferecido na FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Logística',
                'correct' => 0
            ],
            (object)[
                'title' => 'Aeronáutica',
                'correct' => 1
            ],
            (object)[
                'title' => 'Mecânica Automotiva',
                'correct' => 0
            ],
            (object)[
                'title' => 'Sistemas Biomédicos',
                'correct' => 0
            ],
            (object)[
                'title' => 'Projetos Mecânicos',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos cursos indicados a seguir não é oferecido na FATEC de Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Fabricação Mecânica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Hotelaria',
                'correct' => 1
            ],
            (object)[
                'title' => 'Processos Metalúrgicos',
                'correct' => 0
            ],
            (object)[
                'title' => 'Polímeros',
                'correct' => 0
            ],
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Dos cursos apresentados a seguir, qual o único que é oferecido pela FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Corte e Costura',
                'correct' => 0
            ],
            (object)[
                'title' => 'Hotelaria',
                'correct' => 0
            ],
            (object)[
                'title' => 'Aeronáutica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Enfermagem',
                'correct' => 0
            ],
            (object)[
                'title' => 'Análise e Desenvolvimento de Sistemas',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantos alunos matriculados tem a FATEC-Sorocaba no momento?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '5000000',
                'correct' => 0
            ],
            (object)[
                'title' => '100000',
                'correct' => 0
            ],
            (object)[
                'title' => '1000',
                'correct' => 0
            ],
            (object)[
                'title' => '200',
                'correct' => 0
            ],
            (object)[
                'title' => '2800',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Das escolas de ensino médio sorocabanas a seguir, qual pertence ao Centro Paula Souza?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Colégio Objetivo',
                'correct' => 0
            ],
            (object)[
                'title' => 'Colégio Politécnico',
                'correct' => 0
            ],
            (object)[
                'title' => 'Colégio Salesiano São José',
                'correct' => 0
            ],
            (object)[
                'title' => 'Fernando Prestes',
                'correct' => 1
            ],
            (object)[
                'title' => 'Anglo',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantas Fatecs existem no Centro Paula Souza?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '40',
                'correct' => 0
            ],
            (object)[
                'title' => '05',
                'correct' => 0
            ],
            (object)[
                'title' => '01',
                'correct' => 0
            ],
            (object)[
                'title' => '20',
                'correct' => 0
            ],
            (object)[
                'title' => '73',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantas ETECs existem no Centro Paula Souza?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '10',
                'correct' => 0
            ],
            (object)[
                'title' => '223',
                'correct' => 1
            ],
            (object)[
                'title' => '0',
                'correct' => 0
            ],
            (object)[
                'title' => '25',
                'correct' => 0
            ],
            (object)[
                'title' => '100',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Em que ano começou a funcionar o curso de ADS da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '1970',
                'correct' => 0
            ],
            (object)[
                'title' => '1945',
                'correct' => 0
            ],
            (object)[
                'title' => '1932',
                'correct' => 0
            ],
            (object)[
                'title' => '1915',
                'correct' => 0
            ],
            (object)[
                'title' => '2008',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Quantas cidades do Estado de São Paulo possuem Fatecs?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '05',
                'correct' => 0
            ],
            (object)[
                'title' => '04',
                'correct' => 0
            ],
            (object)[
                'title' => '10',
                'correct' => 0
            ],
            (object)[
                'title' => '30',
                'correct' => 0
            ],
            (object)[
                'title' => '67',
                'correct' => 1
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos lugares a seguir é próximo do campus da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Fábrica Toyota',
                'correct' => 0
            ],
            (object)[
                'title' => 'Catedral Metropolitana',
                'correct' => 0
            ],
            (object)[
                'title' => 'Prefeitura Municipal de Sorocaba',
                'correct' => 1
            ],
            (object)[
                'title' => 'Shopping Iguatemi',
                'correct' => 0
            ],
            (object)[
                'title' => 'Terminal São Paulo',
                'correct' => 0
            ],
        ];
        $this->createAnswer(
            $title, $description, $one, $titles
        );
        $title = 'Qual dos lugares a seguir NÃO É próximo do campus da FATEC-Sorocaba?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Clube de Campo de Sorocaba',
                'correct' => 0
            ],
            (object)[
                'title' => 'TV Tem',
                'correct' => 0
            ],
            (object)[
                'title' => 'Shopping Iguatemi',
                'correct' => 1
            ],
            (object)[
                'title' => 'Jornal Cruzeiro do Sul',
                'correct' => 0
            ],
            (object)[
                'title' => 'Prefeitura Municipal',
                'correct' => 0
            ],
        ];
        $title = 'Quanto um aluno da FATEC-Sorocaba paga de mensalidade?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '1000',
                'correct' => 0
            ],
            (object)[
                'title' => '500',
                'correct' => 0
            ],
            (object)[
                'title' => '300',
                'correct' => 0
            ],
            (object)[
                'title' => '200',
                'correct' => 0
            ],
            (object)[
                'title' => '0',
                'correct' => 1
            ],
        ];
        $title = 'Qual o percentual de formados da FATEC-Sorocaba que consegue um emprego?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'cerca de 90%',
                'correct' => 1
            ],
            (object)[
                'title' => '50%',
                'correct' => 0
            ],
            (object)[
                'title' => '40%',
                'correct' => 0
            ],
            (object)[
                'title' => '10%',
                'correct' => 0
            ],
            (object)[
                'title' => '0%',
                'correct' => 0
            ],
        ];
        $title = 'Das 8 edições da Maratona InterFatecs de Programação, quantas a FATEC-Sorocaba ganhou?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => '0',
                'correct' => 0
            ],
            (object)[
                'title' => '4',
                'correct' => 1
            ],
            (object)[
                'title' => '3',
                'correct' => 0
            ],
            (object)[
                'title' => '2',
                'correct' => 0
            ],
            (object)[
                'title' => '1',
                'correct' => 0
            ],
        ];
        $title = 'Quantos cursos da Fatec promovem 2 processos seletivos para vestibular por ano?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'todos os cursos',
                'correct' => 1
            ],
            (object)[
                'title' => '5 cursos',
                'correct' => 0
            ],
            (object)[
                'title' => '3 cursos',
                'correct' => 0
            ],
            (object)[
                'title' => '2 cursos',
                'correct' => 0
            ],
            (object)[
                'title' => 'nenhum curso',
                'correct' => 0
            ],
        ];
        $title = 'Como se chama a lendária Carpa que habita o lago da Fatec?';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Romilda',
                'correct' => 0
            ],
            (object)[
                'title' => 'Katarina',
                'correct' => 1
            ],
            (object)[
                'title' => 'Sebastiana',
                'correct' => 0
            ],
            (object)[
                'title' => 'Nemo',
                'correct' => 0
            ],
            (object)[
                'title' => 'Dori',
                'correct' => 0
            ],
        ];
        $title = 'O patrono da FATEC-Sorocaba, sr José Crespo Gonzales foi ...';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Um professor da Fatec',
                'correct' => 0
            ],
            (object)[
                'title' => 'Um médico',
                'correct' => 0
            ],
            (object)[
                'title' => 'Um prefeito',
                'correct' => 1
            ],
            (object)[
                'title' => 'Um senador',
                'correct' => 0
            ],
            (object)[
                'title' => 'Um militar',
                'correct' => 0
            ],
        ];
        $title = 'Indique qual dos itens a seguir NÃO EXISTE na FATEC-Sorocaba';
        $description = '';
        $one = true;
        $titles = [
            (object)[
                'title' => 'Estação Meteorológica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Laboratório de Robótica',
                'correct' => 0
            ],
            (object)[
                'title' => 'Quadra de esportes',
                'correct' => 0
            ],
            (object)[
                'title' => 'Biblioteca',
                'correct' => 0
            ],
            (object)[
                'title' => 'Hospital',
                'correct' => 1
            ],
        ];
    }
}
