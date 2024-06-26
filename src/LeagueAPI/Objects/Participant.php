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
 *   Class Participant
 *
 * Used in:
 *   spectator (v4)
 *     - @see LeagueAPI::getFeaturedGames
 * @link https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
 *
 * @linkable getStaticChampion($championId)
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class Participant extends ApiObjectLinkable
{
    /**
     * Flag indicating whether or not this participant is a bot.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var bool $bot
     */
    public bool $bot;

    /**
     * The ID of the second summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $spell2Id
     */
    public int $spell2Id;

    /**
     * The ID of the profile icon used by this participant.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $profileIconId
     */
    public int $profileIconId;

    /**
     * The summoner name of this participant.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var string $summonerName
     */
    public string $summonerName;

    /**
     * The ID of the champion played by this participant.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $championId
     */
    public int $championId;

    /**
     * The team ID of this participant, indicating the participant's team.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $teamId
     */
    public int $teamId;

    /**
     * The ID of the first summoner spell used by this participant.
     *
     * Available when received from:
     *   - @see LeagueAPI::getFeaturedGames
     *
     * @var int $spell1Id
     */
    public int $spell1Id;
}
