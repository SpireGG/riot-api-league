<?php

declare(strict_types=1);

namespace RiotAPI\LeagueAPI\Objects;


/**
 *   Class LeagueItemDto
 *
 * Used in:
 *    league (v4)
 *      - @see LeagueAPI::getLeagueEntriesForPUUID
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntriesByPUUID
 *      - @see LeagueAPI::getLeagueEntries
 * @link https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
 *      - @see LeagueAPI::getChallengerLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
 *      - @see LeagueAPI::getMasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
 *      - @see LeagueAPI::getGrandmasterLeague
 * @link https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
 *      - @see LeagueAPI::getLeagueById
 * @link https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
 *
 * @package RiotAPI\LeagueAPI\Objects
 */
class LeagueItemDto extends ApiObject
{
    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var bool $freshBlood
     */
    public bool $freshBlood;

    /**
     * Winning team on Summoner's Rift.
     *
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var int $wins
     */
    public int $wins;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var string $summonerName
     */
    public string $summonerName;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var MiniSeriesDto|null $miniSeries
     */
    public ?MiniSeriesDto $miniSeries = null;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var bool $inactive
     */
    public bool $inactive;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var bool $veteran
     */
    public bool $veteran;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var bool $hotStreak
     */
    public bool $hotStreak;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var string $rank
     */
    public string $rank;

    /**
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var int $leaguePoints
     */
    public int $leaguePoints;

    /**
     * Losing team on Summoners Rift.
     *
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var int $losses
     */
    public int $losses;

    /**
     * Player's encrypted puuid.
     *
     * Available when received from:
     *   - @see LeagueAPI::getChallengerLeague
     *   - @see LeagueAPI::getGrandmasterLeague
     *   - @see LeagueAPI::getLeagueById
     *   - @see LeagueAPI::getMasterLeague
     *
     * @var string $puuid
     */
    public string $puuid;
}
