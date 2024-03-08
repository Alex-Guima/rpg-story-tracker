package com.rpgstorytracker.repositories;

import java.util.UUID;

import org.springframework.data.jpa.repository.JpaRepository;

import com.rpgstorytracker.models.Campaign;

public interface CampaignRepository extends JpaRepository<Campaign, UUID> {

}
