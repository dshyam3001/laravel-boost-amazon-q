<?php

declare(strict_types=1);

namespace Dshyam3001\LaravelBoostAmazonQ\Install\Agents;

use Illuminate\Support\Facades\Config;
use Laravel\Boost\Contracts\SupportsGuidelines;
use Laravel\Boost\Contracts\SupportsSkills;
use Laravel\Boost\Install\Agents\Agent;
use Laravel\Boost\Install\Enums\Platform;

class AmazonQ extends Agent implements SupportsGuidelines, SupportsSkills
{
    public function name(): string
    {
        return 'amazonq';
    }

    public function displayName(): string
    {
        return 'Amazon Q Developer';
    }

    public function systemDetectionConfig(Platform $platform): array
    {
        return match ($platform) {
            Platform::Darwin => [
                'paths' => ['/Applications/Visual Studio Code.app'],
            ],
            Platform::Linux => [
                'command' => 'command -v code',
            ],
            Platform::Windows => [
                'paths' => [
                    '%ProgramFiles%\\Microsoft VS Code',
                    '%LOCALAPPDATA%\\Programs\\Microsoft VS Code',
                ],
            ],
        };
    }

    public function projectDetectionConfig(): array
    {
        return [
            'paths' => ['.amazonq'],
        ];
    }

    public function guidelinesPath(): string
    {
        return Config::get('boost.agents.amazonq.guidelines_path', '.amazonq/rules/guidelines.md');
    }

    public function skillsPath(): string
    {
        return Config::get('boost.agents.amazonq.skills_path', '.amazonq/rules/skills');
    }
}
