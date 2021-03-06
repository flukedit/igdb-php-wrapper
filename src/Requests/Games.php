<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Games extends Base implements RequestInterface
{
    protected $endpoint = 'games';

    protected $defaultFields = [
        'age_ratings',
        'aggregated_rating',
        'aggregated_rating_count',
        'alternative_names',
        'artworks',
        'bundles',
        'category',
        'checksum',
        'collection',
        'cover',
        'created_at',
        'dlcs',
        'expansions',
        'external_games',
        'first_release_date',
        'follows',
        'franchise',
        'franchises',
        'game_engines',
        'game_modes',
        'genres',
        'hypes',
        'involved_companies',
        'keywords',
        'multiplayer_modes',
        'name',
        'parent_game',
        'platforms',
        'player_perspectives',
        'popularity',
        'pulse_count',
        'rating',
        'rating_count',
        'release_dates',
        'screenshots',
        'similar_games',
        'slug',
        'standalone_expansions',
        'status',
        'storyline',
        'summary',
        'tags',
        'themes',
        'time_to_beat',
        'total_rating',
        'total_rating_count',
        'updated_at',
        'url',
        'version_parent',
        'version_title',
        'videos',
        'websites'
    ];
}