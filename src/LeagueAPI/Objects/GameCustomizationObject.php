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
 *   Class GameCustomizationObject
 *
 * Used in:
 *   spectator (v4)
 *     - @see LeagueAPI::getCurrentGameInfoBySummoner
 * @link https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class GameCustomizationObject extends ApiObject
{
    /**
     * Category identifier for Game Customization.
     *
     * Available when received from:
     *   - @see LeagueAPI::getCurrentGameInfoBySummoner
     *
     * @var string $category
     */
    public string $category;

    /**
     * Game Customization content.
     *
     * Available when received from:
     *   - @see LeagueAPI::getCurrentGameInfoBySummoner
     *
     * @var string $content
     */
    public string $content;
}
