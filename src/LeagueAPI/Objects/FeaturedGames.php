<?php

/**
 * Copyright (C) 2016-2023  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class FeaturedGames
 *
 * Used in:
 *   spectator (v4)
 *     - @see LeagueAPI::getFeaturedGames
 * @link https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *
 * @iterable $gameList
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class FeaturedGames extends ApiObjectIterable
{
    /**
     * The list of featured games.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var FeaturedGameInfo[] $gameList
     */
    public array $gameList;

    /**
     * The suggested interval to wait before requesting FeaturedGames again.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $clientRefreshInterval
     */
    public int $clientRefreshInterval;
}
