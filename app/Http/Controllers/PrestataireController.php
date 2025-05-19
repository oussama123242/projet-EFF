<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestataire;

class PrestataireController extends Controller
{
    public function index($type)
    {
        $prestataires = Prestataire::where('type', $type)->get();

        return view('prestataires.index', compact('prestataires', 'type'));

    }

    public function photographes(Request $request)
    {
        // Données des photographes
        $photographes = [
            [
                'nom' => 'Studio Photo Excellence',
                'description' => 'Studio professionnel spécialisé en mariage et événements familiaux',
                'rating' => 4.9,
                'nombre_avis' => 128,
                'badge' => 'Premium Plus',
                'prix_base' => 8000,
                'services' => [
                    'Couverture complète mariage',
                    'Photos de famille',
                    'Retouche professionnelle',
                    'Album luxe',
                    'Drone aérien',
                    'Vidéo événement'
                ],
                'images_gallery' => [
                    'studio1.jpg',
                    'studio2.jpg',
                    'studio3.jpg',
                    'studio4.jpg'
                ]
            ],
            [
                'nom' => 'Captures & Moments',
                'description' => 'Photographe créatif spécialisé en portraits et événements d\'entreprise',
                'rating' => 4.8,
                'nombre_avis' => 95,
                'badge' => 'Expert',
                'prix_base' => 6000,
                'services' => [
                    'Portraits professionnels',
                    'Photos corporate',
                    'Événements d\'entreprise',
                    'Retouche artistique',
                    'Album numérique'
                ],
                'images_gallery' => [
                    'capture1.jpg',
                    'capture2.jpg',
                    'capture3.jpg',
                    'capture4.jpg'
                ]
            ],
            [
                'nom' => 'L\'Œil Artistique',
                'description' => 'Photographe artistique spécialisé en mariage et événements culturels',
                'rating' => 4.7,
                'nombre_avis' => 82,
                'badge' => 'Premium',
                'prix_base' => 7500,
                'services' => [
                    'Photos de mariage traditionnel',
                    'Photos de cérémonie',
                    'Portraits artistiques',
                    'Album premium',
                    'Cadres décoratifs'
                ],
                'images_gallery' => [
                    'oeil1.jpg',
                    'oeil2.jpg',
                    'oeil3.jpg',
                    'oeil4.jpg'
                ]
            ],
            [
                'nom' => 'Studio Vision Pro',
                'description' => 'Studio moderne spécialisé en événements et photos de famille',
                'rating' => 4.6,
                'nombre_avis' => 67,
                'badge' => 'Professionnel',
                'prix_base' => 5500,
                'services' => [
                    'Photos de famille',
                    'Événements privés',
                    'Photos de bébé',
                    'Retouche basique',
                    'Album standard'
                ],
                'images_gallery' => [
                    'vision1.jpg',
                    'vision2.jpg',
                    'vision3.jpg',
                    'vision4.jpg'
                ]
            ],
            [
                'nom' => 'Moments Magiques',
                'description' => 'Photographe spécialisé en événements et portraits naturels',
                'rating' => 4.5,
                'nombre_avis' => 58,
                'badge' => 'Professionnel',
                'prix_base' => 4500,
                'services' => [
                    'Photos d\'événements',
                    'Portraits en extérieur',
                    'Photos de groupe',
                    'Retouche standard',
                    'Album numérique'
                ],
                'images_gallery' => [
                    'magique1.jpg',
                    'magique2.jpg',
                    'magique3.jpg',
                    'magique4.jpg'
                ]
            ],
            [
                'nom' => 'Studio Élégance',
                'description' => 'Studio haut de gamme spécialisé en mariage et événements VIP',
                'rating' => 5.0,
                'nombre_avis' => 156,
                'badge' => 'Luxe',
                'prix_base' => 12000,
                'services' => [
                    'Couverture VIP mariage',
                    'Photos de mode',
                    'Retouche premium',
                    'Album luxe personnalisé',
                    'Vidéo professionnelle',
                    'Drone 4K'
                ],
                'images_gallery' => [
                    'elegance1.jpg',
                    'elegance2.jpg',
                    'elegance3.jpg',
                    'elegance4.jpg'
                ]
            ]
        ];

        // Filtrer les photographes selon les critères de recherche
        if ($request->has('style')) {
            $style = $request->style;
            // Logique de filtrage par style (à implémenter)
        }

        if ($request->has('budget')) {
            $budget = $request->budget;
            // Logique de filtrage par budget (à implémenter)
        }

        return view('prestataires.photographes', compact('photographes'));
    }

    public function traiteurs(Request $request)
    {
        // Données des traiteurs
        $traiteurs = [
            [
                'nom' => 'Saveurs du Maroc',
                'description' => 'Traiteur traditionnel spécialisé en cuisine marocaine authentique',
                'rating' => 4.9,
                'nombre_avis' => 156,
                'badge' => 'Premium Plus',
                'prix_base' => 150,
                'services' => [
                    'Cuisine marocaine traditionnelle',
                    'Service traiteur complet',
                    'Buffet à volonté',
                    'Personnel de service',
                    'Location de vaisselle',
                    'Décoration de table'
                ],
                'images_gallery' => [
                    'traiteur1-1.jpg',
                    'traiteur1-2.jpg',
                    'traiteur1-3.jpg',
                    'traiteur1-4.jpg'
                ]
            ],
            [
                'nom' => 'Gourmet Events',
                'description' => 'Traiteur moderne spécialisé en cuisine internationale',
                'rating' => 4.8,
                'nombre_avis' => 98,
                'badge' => 'Expert',
                'prix_base' => 180,
                'services' => [
                    'Cuisine internationale',
                    'Service traiteur premium',
                    'Buffet gastronomique',
                    'Chef personnel',
                    'Service de bar',
                    'Décoration événementielle'
                ],
                'images_gallery' => [
                    'traiteur2-1.jpg',
                    'traiteur2-2.jpg',
                    'traiteur2-3.jpg',
                    'traiteur2-4.jpg'
                ]
            ],
            [
                'nom' => 'Saveurs & Traditions',
                'description' => 'Traiteur familial spécialisé en cuisine traditionnelle',
                'rating' => 4.7,
                'nombre_avis' => 87,
                'badge' => 'Premium',
                'prix_base' => 120,
                'services' => [
                    'Cuisine traditionnelle',
                    'Service traiteur standard',
                    'Buffet familial',
                    'Location de matériel',
                    'Service de base'
                ],
                'images_gallery' => [
                    'traiteur3-1.jpg',
                    'traiteur3-2.jpg',
                    'traiteur3-3.jpg',
                    'traiteur3-4.jpg'
                ]
            ],
            [
                'nom' => 'Elite Catering',
                'description' => 'Traiteur haut de gamme pour événements VIP',
                'rating' => 5.0,
                'nombre_avis' => 112,
                'badge' => 'Luxe',
                'prix_base' => 250,
                'services' => [
                    'Cuisine gastronomique',
                    'Service traiteur VIP',
                    'Buffet luxueux',
                    'Chef étoilé',
                    'Service de bar premium',
                    'Décoration luxe',
                    'Animation culinaire'
                ],
                'images_gallery' => [
                    'traiteur4-1.jpg',
                    'traiteur4-2.jpg',
                    'traiteur4-3.jpg',
                    'traiteur4-4.jpg'
                ]
            ],
            [
                'nom' => 'Fusion Catering',
                'description' => 'Traiteur créatif spécialisé en fusion cuisine',
                'rating' => 4.6,
                'nombre_avis' => 76,
                'badge' => 'Professionnel',
                'prix_base' => 160,
                'services' => [
                    'Cuisine fusion',
                    'Service traiteur créatif',
                    'Buffet moderne',
                    'Chef spécialisé',
                    'Service de bar',
                    'Décoration contemporaine'
                ],
                'images_gallery' => [
                    'traiteur5-1.jpg',
                    'traiteur5-2.jpg',
                    'traiteur5-3.jpg',
                    'traiteur5-4.jpg'
                ]
            ],
            [
                'nom' => 'Saveurs Locales',
                'description' => 'Traiteur authentique spécialisé en cuisine régionale',
                'rating' => 4.5,
                'nombre_avis' => 65,
                'badge' => 'Professionnel',
                'prix_base' => 100,
                'services' => [
                    'Cuisine régionale',
                    'Service traiteur basique',
                    'Buffet traditionnel',
                    'Location de matériel',
                    'Service simple'
                ],
                'images_gallery' => [
                    'traiteur6-1.jpg',
                    'traiteur6-2.jpg',
                    'traiteur6-3.jpg',
                    'traiteur6-4.jpg'
                ]
            ]
        ];

        // Filtrer les traiteurs selon les critères de recherche
        if ($request->has('style')) {
            $style = $request->style;
            // Logique de filtrage par style (à implémenter)
        }

        if ($request->has('budget')) {
            $budget = $request->budget;
            // Logique de filtrage par budget (à implémenter)
        }

        return view('prestataires.traiteurs', compact('traiteurs'));
    }

    public function decorateurs()
    {
        $decorateurs = [
            [
                'nom' => 'Élégance & Décoration',
                'description' => 'Décoration événementielle haut de gamme avec une touche d\'élégance marocaine',
                'rating' => 4.8,
                'nombre_avis' => 156,
                'badge' => 'Premium Plus',
                'prix_base' => 15000,
                'services' => [
                    'Décoration complète de salle',
                    'Mobilier événementiel',
                    'Éclairage d\'ambiance',
                    'Fleurs et compositions',
                    'Accessoires décoratifs',
                    'Installation et démontage'
                ],
                'images_gallery' => [
                    'elegance-1.jpg',
                    'elegance-2.jpg',
                    'elegance-3.jpg',
                    'elegance-4.jpg'
                ]
            ],
            [
                'nom' => 'Studio Créatif',
                'description' => 'Créations uniques et designs contemporains pour vos événements',
                'rating' => 4.6,
                'nombre_avis' => 98,
                'badge' => 'Expert',
                'prix_base' => 12000,
                'services' => [
                    'Design personnalisé',
                    'Décoration thématique',
                    'Installation technique',
                    'Location de mobilier',
                    'Direction artistique',
                    'Coordination événementielle'
                ],
                'images_gallery' => [
                    'studio-1.jpg',
                    'studio-2.jpg',
                    'studio-3.jpg',
                    'studio-4.jpg'
                ]
            ],
            [
                'nom' => 'Art & Décoration',
                'description' => 'Décoration traditionnelle et moderne pour tous types d\'événements',
                'rating' => 4.7,
                'nombre_avis' => 112,
                'badge' => 'Premium',
                'prix_base' => 10000,
                'services' => [
                    'Décoration traditionnelle',
                    'Décoration moderne',
                    'Fleurs artificielles',
                    'Accessoires de table',
                    'Éclairage décoratif',
                    'Service complet'
                ],
                'images_gallery' => [
                    'art-1.jpg',
                    'art-2.jpg',
                    'art-3.jpg',
                    'art-4.jpg'
                ]
            ],
            [
                'nom' => 'Luxe & Événements',
                'description' => 'Décoration luxueuse et prestigieuse pour événements d\'exception',
                'rating' => 4.9,
                'nombre_avis' => 87,
                'badge' => 'Luxe',
                'prix_base' => 20000,
                'services' => [
                    'Décoration haut de gamme',
                    'Mobilier de luxe',
                    'Éclairage professionnel',
                    'Fleurs premium',
                    'Design exclusif',
                    'Service VIP'
                ],
                'images_gallery' => [
                    'luxe-1.jpg',
                    'luxe-2.jpg',
                    'luxe-3.jpg',
                    'luxe-4.jpg'
                ]
            ],
            [
                'nom' => 'Créations & Style',
                'description' => 'Décoration créative et tendance pour événements modernes',
                'rating' => 4.5,
                'nombre_avis' => 76,
                'badge' => 'Professionnel',
                'prix_base' => 8000,
                'services' => [
                    'Décoration moderne',
                    'Design créatif',
                    'Installation complète',
                    'Location de matériel',
                    'Accessoires tendance',
                    'Service personnalisé'
                ],
                'images_gallery' => [
                    'creations-1.jpg',
                    'creations-2.jpg',
                    'creations-3.jpg',
                    'creations-4.jpg'
                ]
            ],
            [
                'nom' => 'Tradition & Modernité',
                'description' => 'Fusion parfaite entre décoration traditionnelle et moderne',
                'rating' => 4.6,
                'nombre_avis' => 92,
                'badge' => 'Professionnel',
                'prix_base' => 9000,
                'services' => [
                    'Décoration mixte',
                    'Mobilier traditionnel',
                    'Éclairage moderne',
                    'Fleurs naturelles',
                    'Accessoires authentiques',
                    'Service complet'
                ],
                'images_gallery' => [
                    'tradition-1.jpg',
                    'tradition-2.jpg',
                    'tradition-3.jpg',
                    'tradition-4.jpg'
                ]
            ]
        ];

        // Logique de filtrage à implémenter selon les paramètres de la requête
        // Par exemple : style de décoration, budget, etc.

        return view('prestataires.decorateurs', compact('decorateurs'));
    }

    public function animateurs(Request $request)
    {
        $animateurs = [
            [
                'nom' => 'Show Time Events',
                'description' => 'Animation professionnelle pour tous types d\'événements avec une équipe dynamique',
                'rating' => 4.9,
                'nombre_avis' => 145,
                'badge' => 'Premium Plus',
                'prix_base' => 8000,
                'services' => [
                    'Animation complète',
                    'DJ professionnel',
                    'Show lumineux',
                    'Jeux interactifs',
                    'Concours et animations',
                    'Équipe d\'animateurs'
                ],
                'images_gallery' => [
                    'showtime-1.jpg',
                    'showtime-2.jpg',
                    'showtime-3.jpg',
                    'showtime-4.jpg'
                ]
            ],
            [
                'nom' => 'Fun & Entertainment',
                'description' => 'Animation créative et ludique pour événements familiaux et d\'entreprise',
                'rating' => 4.8,
                'nombre_avis' => 112,
                'badge' => 'Expert',
                'prix_base' => 6500,
                'services' => [
                    'Animation personnalisée',
                    'Jeux d\'équipe',
                    'Concours interactifs',
                    'Animation musicale',
                    'Déguisements et accessoires',
                    'Coordination événementielle'
                ],
                'images_gallery' => [
                    'fun-1.jpg',
                    'fun-2.jpg',
                    'fun-3.jpg',
                    'fun-4.jpg'
                ]
            ],
            [
                'nom' => 'Magie & Spectacle',
                'description' => 'Animation magique et spectacles pour événements d\'exception',
                'rating' => 4.9,
                'nombre_avis' => 98,
                'badge' => 'Premium',
                'prix_base' => 7500,
                'services' => [
                    'Spectacle de magie',
                    'Animation close-up',
                    'Show interactif',
                    'Animation de table',
                    'Effets spéciaux',
                    'Coordination artistique'
                ],
                'images_gallery' => [
                    'magie-1.jpg',
                    'magie-2.jpg',
                    'magie-3.jpg',
                    'magie-4.jpg'
                ]
            ],
            [
                'nom' => 'Luxe Entertainment',
                'description' => 'Animation haut de gamme pour événements VIP et prestigieux',
                'rating' => 5.0,
                'nombre_avis' => 87,
                'badge' => 'Luxe',
                'prix_base' => 12000,
                'services' => [
                    'Animation VIP',
                    'Show exclusif',
                    'Animation de prestige',
                    'Effets visuels premium',
                    'Coordination luxe',
                    'Service personnalisé'
                ],
                'images_gallery' => [
                    'luxe-1.jpg',
                    'luxe-2.jpg',
                    'luxe-3.jpg',
                    'luxe-4.jpg'
                ]
            ],
            [
                'nom' => 'Tradition & Animation',
                'description' => 'Animation traditionnelle marocaine avec une touche moderne',
                'rating' => 4.7,
                'nombre_avis' => 76,
                'badge' => 'Professionnel',
                'prix_base' => 5500,
                'services' => [
                    'Animation traditionnelle',
                    'Musique marocaine',
                    'Danse folklorique',
                    'Jeux traditionnels',
                    'Animation de groupe',
                    'Service complet'
                ],
                'images_gallery' => [
                    'tradition-1.jpg',
                    'tradition-2.jpg',
                    'tradition-3.jpg',
                    'tradition-4.jpg'
                ]
            ],
            [
                'nom' => 'Kids & Family',
                'description' => 'Animation spécialisée pour enfants et événements familiaux',
                'rating' => 4.8,
                'nombre_avis' => 92,
                'badge' => 'Professionnel',
                'prix_base' => 4500,
                'services' => [
                    'Animation enfants',
                    'Jeux éducatifs',
                    'Maquillage artistique',
                    'Structures gonflables',
                    'Animation familiale',
                    'Service adapté'
                ],
                'images_gallery' => [
                    'kids-1.jpg',
                    'kids-2.jpg',
                    'kids-3.jpg',
                    'kids-4.jpg'
                ]
            ]
        ];

        // Logique de filtrage à implémenter selon les paramètres de la requête
        if ($request->has('style')) {
            $style = $request->style;
            // Logique de filtrage par style (à implémenter)
        }

        if ($request->has('budget')) {
            $budget = $request->budget;
            // Logique de filtrage par budget (à implémenter)
        }

        return view('prestataires.animateurs', compact('animateurs'));
    }
}
