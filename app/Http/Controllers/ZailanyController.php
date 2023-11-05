<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;




class ZailanyController extends Controller
{

    public function index(){
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    public function detail($id){
        $movie = Movie::find($id);
        return view('detail', compact('movie'));
    }
    public function search(Request $request)
    {

        $query = $request->input('q');
        $movies =[
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'rating' => '8.9',
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'rating' => '9.9',
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'rating' => '8.5',
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'rating' => '6.9',
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt2023321',
            'judul' => 'The Hunger Games: The Ballad of Songbirds and Snakes',
            'sinopsis' => 'Set 64 years before The Hunger Games in the land of Panem.

Coriolanus Snow (Tom Blyth) is assigned to be the mentor of Lucy (Rachel Zegler), a female participant from District 12 in the 10th annual Hunger Games. Realizing that his student has a rebellious nature, Snow plans hidden things and the story of how he became the cruel leader of Panem.',
            'tahun' => 2023,
            'rating' => '9.9',
            'pemain' => ['Tom Blyth', 'Rachel Zegler', 'Hunter Schafer', 'Jason Schwartzman', 'Peter Dinklage', 'Kjell Brutscheidt', 'Viola Davis', 'Ayomide Adegun', 'Burn Gorman', 'Fionnula Flanagan', 'George Somner'],
            'foto_sampul' => 'TheHungerGames.jpg',
        ],


	    [
            'id' => 'tt2023322',
            'judul' => 'Napoleon',
            'sinopsis' => 'Set in 1793, during the era of the French Revolution. Napoleon will tell the story of General Napoleon Bonaparte (Joaquin Phoenix), an ambitious, intelligent and strategic figure who dared to fight against a coalition of European countries to expand his power. The emperors triumphant journey to his love affair with Josephine (Vanessa Kirby).',
            'tahun' => 2023,
            'rating' => '8.5',
            'pemain' => ['Joaquin Phoenix', 'Vanessa Kirby', 'Ludivine Sagnier', 'Rupert Everett', 'Mark Bonnar', 'Ben Miles', 'Catherine Walker', 'Ian McNeice', 'Tahar Rahim'],
            'foto_sampul' => 'napoleon.jpg',
        ],


	    [
            'id' => 'tt2023323',
            'judul' => 'Thanksgiving',
            'sinopsis' => 'After Black Friday riots end in tragedy, a mysterious Thanksgiving-inspired killer terrorizes the town of Plymouth, Massachusetts. One by one the victims were killed horribly. Who is this mysterious killer and what is the motive behind it?',
            'tahun' => 2023,
            'rating' => '7.5',
            'pemain' => ['Gina Gershon', 'Rick Hoffman', 'Patrick Dempsey', 'Milo Manheim', 'Addison Rae', 'Nell Verlaque', 'Karen Cliche', 'Shailyn Griffin', 'Jenna Warren', 'Mika Amonsen'],
            'foto_sampul' => 'Thanksgiving.jpg',
        ],

	    [
            'id' => 'tt2023324',
            'judul' => 'The Three Musketeers: D Artagnan',
            'sinopsis' => 'After attempting to save a young woman from kidnapping, D Artagnan (Francois Civil), a passionate young Gascon travels to Paris. When he arrived in Paris, he began efforts to find the perpetrator of the kidnapping at all costs. However, he does not realize that his quest will take him to the real battlefield where the future of France is at stake.',
            'tahun' => 2023,
            'rating' => '8.0',
            'pemain' => ['Francois Civil', 'Vincent Cassel', 'Romain Duris', 'Pio Marmai', 'Eva Green', 'Louis Garrel', 'Vicky Krieps', 'Lyna Khoudri', 'Jacob Fortune-Lloyd', 'Eric Ruf'],
            'foto_sampul' => 'DArtagnan.jpg',
        ],

    	[
            'id' => 'tt2023325',
            'judul' => 'The Marvels',
            'sinopsis' => 'Captain Marvel s (Brie Larson) powers are apparently connected to Ms. Marvel (Iman Vellani) and Monica Rambeau (Teyonah Parris). This makes the three of them constantly switch places. They finally meet and find out why their powers are connected. With a new threat arriving, the three decide to become a team to save the universe as The Marvels.',
            'tahun' => 2023,
            'rating' => '9.0',
            'pemain' => ['Brie Larson', 'Samuel L. Jackson', 'Zawe Ashton', 'Teyonah Parris', 'Iman Vellani', 'Zenobia Shroff', 'Saagar Shaikh', 'Mohan Kapoor', 'Caroline Simonnet'],
            'foto_sampul' => 'TheMarvels.jpg',
        ],

        [
            'id' => 'tt2023326',
            'judul' => 'The Friendship Game',
            'sinopsis' => 'A group of teenagers in a small town play a game with mysterious objects. Without realizing it, this game is dangerous and will test their friendship.',
            'tahun' => 2023,
            'rating' => '6.7',
            'pemain' => ['Peyton List', 'Brendan Meyer', 'Kelcey Mawema', 'Kaitlyn Santa Juana', 'Dylan Schombing', 'Jennifer Copping', 'Annette Reilly', 'Miriam Smith', 'Miranda Edwards', 'Maria Hart', 'Lynn Whyte'],
            'foto_sampul' => 'TheFriendship.jpg',
        ],];

        $results = [];



        // Loop melalui array film Anda
        foreach ($movies as $movie) {
            if (stristr($movie['judul'], $query) !== false) {
                $exists = false;
                // Periksa apakah film sudah ada dalam hasil pencarian
                foreach ($results as $result) {
                    if ($result['id'] === $movie['id']) {
                        $exists = true;
                        break;
                    }
                }
                // Jika film belum ada dalam hasil pencarian, tambahkan
                if (!$exists) {
                    $results[] = $movie;
                }
            }
        }

        return view('search', ['results' => $results, 'query' => $query]);
    }
}
