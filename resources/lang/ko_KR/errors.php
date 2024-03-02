<?php

/**
 * firefly.php
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

// Ignore this comment

declare(strict_types=1);

return [
    '404_header'              => 'Firefly III는 이 페이지를 찾을 수 없습니다.',
    '404_page_does_not_exist' => '요청하신 페이지가 존재하지 않습니다. 잘못된 URL을 입력하지 않았는지 확인해 주세요. 혹시 오타를 입력하셨나요?',
    '404_send_error'          => '이 페이지로 자동 리디렉션되셨다면 사과드립니다. 로그 파일에 이 오류에 대한 언급이 있으니 오류 내용을 보내 주시면 감사하겠습니다.',
    '404_github_link'         => '이 페이지가 있어야 하는 것이 확실하다면 <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>에서 티켓을 만들어주세요.',
    'whoops'                  => '이런',
    'fatal_error'             => '치명적인 오류가 발생했습니다. "storage/logs"에서 로그 파일을 확인하거나 "docker logs -f [container]"를 사용하여 진행 상황을 확인하세요.',
    'maintenance_mode'        => 'Firefly III는 유지 관리 모드입니다.',
    'be_right_back'           => '곧 돌아올게요!',
    'check_back'              => 'Firefly III가 필수 점검을 위해 다운되었습니다. 잠시후 다시 확인해 주세요.',
    'error_occurred'          => '이런! 오류가 발생했습니다.',
    'db_error_occurred'       => '이런! 데이터베이스 오류가 발생했습니다.',
    'error_not_recoverable'   => '안타깝게도 이 오류는 복구할 수 없습니다. :( Firefly III 고장. 에러:',
    'error'                   => '오류',
    'error_location'          => '이 오류는 <span style="font-family: monospace;">:file</span> 파일의 :line 라인 :code에서 발생하였습니다.',
    'stacktrace'              => 'Stack trace',
    'more_info'               => '추가 정보',

    // Ignore this comment

    'collect_info'            => '<code>storage/logs</code> 디렉토리의 로그 파일에서 추가정보를 수집하세요. 도커를 실행중이라면 <code>docker logs -f [container]</code>를 사용하세요.',
    'collect_info_more'       => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'             => 'GitHub에서 도움 얻기',
    'github_instructions'     => '<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub에서</a></strong> 새로운 이슈를 여는 것을 환영합니다.',
    'use_search'              => '검색을 이용하세요!',
    'include_info'            => '<a href=":link">이 디버그 페이지</a>의 정보를 포함합니다.',
    'tell_more'               => '우리에게 "이런! 이라고 쓰여있네요" 보다 더 자세히 알려주세요.',
    'include_logs'            => '에러 로그를 포함합니다 (상단 참조).',
    'what_did_you_do'         => '무엇을 하고 있었는지 알려주세요.',
    'offline_header'          => '오프라인 상태일 수 있습니다.',
    'offline_unreachable'     => 'Firefly III에 접근할 수 없습니다. 장치가 현재 오프라인이거나 서버가 동작하지 않습니다.',
    'offline_github'          => '장치와 서버가 온라인인 것이 확실하다면 <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>에서 티켓을 만들어주세요.',
];
