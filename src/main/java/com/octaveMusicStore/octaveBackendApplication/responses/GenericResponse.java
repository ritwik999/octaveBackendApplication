package com.octaveMusicStore.octaveBackendApplication.responses;

import lombok.*;

import javax.persistence.Enumerated;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
@Builder
@ToString
public class GenericResponse<T> {
    private Integer httpCode;
    private String message;
    @Enumerated
    private StatusCode statusCode;
    T data;
}
