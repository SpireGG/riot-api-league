<?php

declare(strict_types=1);

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class LeagueEntryDto
 *
 * Used in:
 *     league (v4)
 *       - @see LeagueAPI::getLeagueEntriesForPUUID
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntriesByPUUID
 *       - @see LeagueAPI::getLeagueEntries
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
 *       - @see LeagueAPI::getChallengerLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
 *       - @see LeagueAPI::getMasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
 *       - @see LeagueAPI::getGrandmasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
 *       - @see LeagueAPI::getLeagueById
 * @link https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class LeagueEntryDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string $leagueId
     */
    public string $leagueId;

    /**
     * Player's puuid (Encrypted).
     *
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string $puuid
     */
    public string $puuid;

    /**
     * Player's summonerId (Encrypted).
     *
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string|null $summonerId
     */
    public ?string $summonerId;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string $queueType
     */
    public string $queueType;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string $tier
     */
    public string $tier;

    /**
     * The player's division within a tier.
     *
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var string $rank
     */
    public string $rank;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var int $leaguePoints
     */
    public int $leaguePoints;

    /**
     * Winning team on Summoners Rift. First placement in Teamfight Tactics.
     *
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var int $wins
     */
    public int $wins;

    /**
     * Losing team on Summoners Rift. Second through eighth placement in
     * Teamfight Tactics.
     *
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var int $losses
     */
    public int $losses;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var bool $hotStreak
     */
    public bool $hotStreak;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var bool $veteran
     */
    public bool $veteran;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var bool $freshBlood
     */
    public bool $freshBlood;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var bool $inactive
     */
    public bool $inactive;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntries
     *   - @see LeagueAPI::getLeagueEntriesForSummoner
     *
     * @var MiniSeriesDto|null $miniSeries
     */
    public ?MiniSeriesDto $miniSeries = null;
}
