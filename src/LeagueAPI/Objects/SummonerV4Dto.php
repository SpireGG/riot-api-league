<?php

declare(strict_types=1);

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class SummonerDto
 *
 * Used in:
 *     - @see LeagueAPI::getByPUUID
 * @link https://developer.riotgames.com/apis#summoner-v4/GET_getByPUUID
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class SummonerV4Dto extends ApiObject
{
    /**
     * ID of the summoner icon associated with the summoner.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var int $profileIconId
     */
    public int $profileIconId;

    /**
     * Date summoner was last modified specified as epoch milliseconds. The
     * following events will update this timestamp: profile icon change,
     * playing the tutorial or advanced tutorial, finishing a game, summoner
     * name change.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var int $revisionDate
     */
    public int $revisionDate;

    /**
     * Encrypted PUUID. Exact length of 78 characters.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var string $puuid
     */
    public string $puuid;

    /**
     * Encrypted ID
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var string|null $id
     */
    public ?string $id;

    /**
     * Summoner level associated with the summoner.
     *
     * Available when received from:
     *   - @see LeagueAPI::getBySummonerId
     *   - @see LeagueAPI::getByPUUID
     *   - @see LeagueAPI::getByAccountId
     *   - @see LeagueAPI::getBySummonerName
     *   - @see LeagueAPI::getByAccessToken
     *
     * @var int $summonerLevel
     */
    public int $summonerLevel;
}
