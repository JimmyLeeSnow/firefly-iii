<?php

/**
 * email.php
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
    // common items
    'greeting'                                => 'Hei der,',
    'closing'                                 => 'Biip Boop,',
    'signature'                               => 'Firefly III epost roboten',
    'footer_ps'                               => 'PS: Denne meldinga vart utløyst av eit spørsmål frå IP-adressa :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Ei testmelding frå Firefly III-installasjonen din',
    'admin_test_body'                         => 'Dette er ei testmelding frå Firefly III-installasjonen din. Meldinga vart sendt til :email.',

    // Ignore this comment

    // invite
    'invitation_created_subject'              => 'Ein invitasjon har vorte oppretta',
    'invitation_created_body'                 => 'Admin brukar ":email" oppretta ein brukarinvitasjon til ":invitee. Invitasjonen vil vera gyldig i 48 timer.',
    'invite_user_subject'                     => 'Du har vorte invitert til å laga ein Firefly III-konto.',
    'invitation_introduction'                 => 'Du har vorte invitert til å laga ein Firefly III konto på **:host**. Firefly III er ein personleg økonomiverkty. Alle dei kule brukar han.',
    'invitation_invited_by'                   => 'Du har vorte invitert av ":admin" og denne invitasjonen vart sendt til ":invitee. Det er deg, ikkje sant?',
    'invitation_url'                          => 'Invitasjonen er gyldig i 48 timer og kan løysast inn ved å gå til [Firefly III](:url). Kos deg!',

    // new IP
    'login_from_new_ip'                       => 'Ny pålogging på Firefly III',
    'slack_login_from_new_ip'                 => 'Ny Firefly III innlogging frå IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III oppdaget ein ny pålogging på kontoen frå ein ukjent IP-adresse. Om du aldri har logget inn frå IP-adressa under, eller det har vært meir enn eit halvt år sida, vil Firefly III advare deg.',
    'new_ip_warning'                          => 'Om du gjenkjenner denne IP-adressa eller påloggingen, kan du ignorere denne meldinga. Om du ikkje har logget inn, så har du ikkje peiling på kva dette gjelder, bekreft passordsikkerhet, endra det, og logg ut alle økter. For å gjera dette, gå til profilsida. Selvsagt har du 2FA aktivert allereie, ikkje sant? Vær trygg!',
    'ip_address'                              => 'IP-adresse',
    'host_name'                               => 'Vert',
    'date_time'                               => 'Dato + klokkeslett',

    // access token created
    'access_token_created_subject'            => 'Ein ny tilgangstoken vart opprettet',
    'access_token_created_body'               => 'Nokon (forhåpentligvis du) har akkurat oppretta ein ny Firefly III API Access Token for brukarkontoen din.',
    'access_token_created_explanation'        => 'Med denne token, kan dei få tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'access_token_created_revoke'             => 'Om det her ikkje var deg, ver venleg å fjern dette tokenet så snart som mogleg på :url',

    // registered
    'registered_subject'                      => 'Velkomen til Firefly III!',
    'registered_subject_admin'                => 'Ein ny brukar har registrert seg',
    'admin_new_user_registered'               => 'Ein ny brukar har registrert seg. Brukar **:email har fått ID #:id.',
    'registered_welcome'                      => 'Velkomen til [Firefly III](:address). Din registrering er fullført, og denne e-posten er her for å bekrefte det. Kanon!',
    'registered_pw'                           => 'Om du har glemt passordet ditt allereie, kan du tilbakestille det ved å bruka [passord reset tool](:address/password/reset).',
    'registered_help'                         => 'Det er eit hjelp-ikon i hjørnet øvst til høgre på kvar side. Om du trenger hjelp, kan du klikka på den!',
    'registered_closing'                      => 'Kos deg!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Tilbakestill passord:',
    'registered_doc_link'                     => 'Dokumentasjon:',

    // Ignore this comment

    // new version
    'new_version_email_subject'               => 'Ein ny Firefly III versjon er tilgjengeleg',

    // email change
    'email_change_subject'                    => 'Din Firefly III e-postadresse er endra',
    'email_change_body_to_new'                => 'Du eller nokon med tilgang til din Firefly III konto har endra e-postadressa din. Om du ikkje forventet denne meldinga, kan du sjå bort frå og sletta den.',
    'email_change_body_to_old'                => 'Du eller nokon med tilgang til din Firefly III konto har endra e-postadressa din. Om du ikkje forventet dette, så må du **må** følge "angre"-koblingen nedanfor for å beskytta kontoen din!',
    'email_change_ignore'                     => 'Om du utførte denne endringen, kan du trygt ignorere denne meldinga.',
    'email_change_old'                        => 'Den gamle e-postadressa var: :email',
    'email_change_old_strong'                 => 'Den gamle e-postadressa var: **:email',
    'email_change_new'                        => 'Den nye e-postadressa er: :email',
    'email_change_new_strong'                 => 'Den nye e-postadressa er: **:email',
    'email_change_instructions'               => 'Du kan ikkje bruka Firefly III før du bekreftar denne endringa. Følg linken nedanfor for å gjere det.',
    'email_change_undo_link'                  => 'For å angre endringen, følg denne linken:',

    // OAuth token created
    'oauth_created_subject'                   => 'Ein ny OAuth-klient er opprettet',
    'oauth_created_body'                      => 'Nokon (forhåpentligvis du) har nettopp oppretta ein ny Firefly III API OAuth Client for din brukarkonto. Den er markert «:name» og har tilbakekall URL `:url`.',
    'oauth_created_explanation'               => 'Med denne kunden, får dei tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'oauth_created_undo'                      => 'Om dette ikkje var deg, ver venleg å slett denne klienten så snart som mogleg ved `:url`',

    // reset password
    'reset_pw_subject'                        => 'Spørsmålet ditt om tilbakestilling av passord',
    'reset_pw_instructions'                   => 'Nokon forsøkte å tilbakestilla passordet ditt. Om det var deg, ver venleg å følg koplinga nedanfor for å fullføre.',
    'reset_pw_warning'                        => '**VER VENLEG** og bekreft at lenkja faktisk peikar mot Firefly III slik du forventer!',

    // error
    'error_subject'                           => 'Rett ein feil i Firefly III',
    'error_intro'                             => 'Firefly III v:version fikk ein feil: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Feilen var av typen ":class.',
    'error_timestamp'                         => 'Feilen oppstod på: :time.',
    'error_location'                          => 'Denne feilen oppstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med kode :code.',
    'error_user'                              => 'Feilen oppstod på av brukaren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Det var ingen brukar som var pålogget for denne feilen, eller ingen brukar vart oppdaget.',
    'error_ip'                                => 'IP-adressa relatert til denne feilen er: :ip',
    'error_url'                               => 'URL er: :url',
    'error_user_agent'                        => 'Brukaragent: :userAgent',
    'error_stacktrace'                        => 'Hele informasjonen er under. Om du trur dette er ein feil i Firefly III, kan du videresende denne meldinga til <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-ii. rg</a>. Dette kan hjelpa med å rette opp feilen du nettopp har funne.',
    'error_github_html'                       => 'Om du føretrekk, kan du òg åpne eit nytt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Om du føretrekk, kan du òg åpne eit nytt problem på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                  => 'Hele informasjonen er:',
    'error_headers'                           => 'Følgende headers kan òg vera relevant:',
    'error_post'                              => 'This was submitted by the user:',

    // Ignore this comment

    // report new journals
    'new_journals_subject'                    => 'Firefly III har oppretta ein ny transaksjon|Firefly III har skapt :count nye transaksjonar',
    'new_journals_header'                     => 'Firefly III har oppretta ein transaksjon for deg. Du finn den i din Firefly III installasjon|:Firefly III har laget :count transaksjonar for deg. Du kan finna dei i Firefly III installasjonen:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Rekninga din ":name" har forfallsdato om :diff dager',
    'bill_warning_subject_now_end_date'       => 'Rekninga din ":name" har forfallsdato I DAG',
    'bill_warning_subject_extension_date'     => 'Rekninga din ":name vil verta forlenget eller kansellert om :diff dager',
    'bill_warning_subject_now_extension_date' => 'Rekninga din ":name vil verta forlenget eller kansellert I DAG',
    'bill_warning_end_date'                   => 'Rekninga din **":name"** avsluttes :date. Dette er om **:diff dager**.',
    'bill_warning_extension_date'             => 'Rekninga din **":name"** vil verta forlenget eller annullert :date. Dette er om **:diff dager**.',
    'bill_warning_end_date_zero'              => 'Rekninga din **":name"** avsluttes :date. Dette er **I DAG!**',
    'bill_warning_extension_date_zero'        => 'Rekninga din **":name"** skal forlenges eller annulleres :date. Dette er **I DAG!**',
    'bill_warning_please_action'              => 'Ver venleg å gjer dei rette tiltaka.',
];
// Ignore this comment
