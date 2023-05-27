package com.octaveMusicStore.octaveBackendApplication.responses;

import lombok.*;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
@Builder
@ToString
public class CreateUserResponse {
    private String email;
    private String message;
}
