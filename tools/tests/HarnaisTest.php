<?php
declare(strict_types=1);

function test_harnais_assert_same_accepte_des_valeurs_identiques(): void
{
    assert_same(3, 1 + 2);
}

function test_harnais_assert_same_rejette_des_types_differents(): void
{
    try {
        assert_same(3, '3');
    } catch (EchecTest $e) {
        return;
    }
    throw new EchecTest('assert_same aurait dû échouer entre un entier et une chaîne');
}

function test_harnais_racine_pointe_sur_le_depot(): void
{
    assert_true(is_file(racine('.htaccess')), 'racine() ne pointe pas sur la racine du dépôt');
}
