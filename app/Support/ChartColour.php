<?php
/**
 * ChartColour.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Support;

/**
 * Class ChartColour.
 *
 * @codeCoverageIgnore
 */
class ChartColour
{
    /**
     * @var array
     */
    public static $colours
        = [
            [0, 130, 240], //Blue
            [15, 195, 115], // green
            [175, 120, 210], //Purple
            [255, 50, 50], // Red
            [250, 210, 45], // Yellow
            [255, 140, 10], //Orange
            [102, 181, 244], // Blue 2
            [112, 219, 170], // Green 2
            [206, 173, 226], // Purple 2
            [255, 132, 132], // Red 2
            [252, 226, 130], // Yellow 2
            [254, 186, 126], // Orange 2
            [0, 104, 191], // Blue 4
            [12, 155, 91], // Green 4
            [140, 96, 168], // Purple 4
            [204, 40, 40], // Red 4
            [198, 168, 35] // Yellow 4
        ];

    /**
     * @param int $index
     *
     * @return string
     */
    public static function getColour(int $index): string
    {
        $index %= count(self::$colours);
        $row   = self::$colours[$index];

        return sprintf('rgba(%d, %d, %d, 1.0)', $row[0], $row[1], $row[2]);
    }
}
